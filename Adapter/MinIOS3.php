<?php

namespace CloudFiles\Adapter;

use ExpressionEngine\Dependency\Aws\S3\S3Client;
use ExpressionEngine\Dependency\League\Flysystem;
use ExpressionEngine\Library\Filesystem\Adapter\AdapterInterface;
use ExpressionEngine\Library\Filesystem\Adapter\AdapterTrait;
use ExpressionEngine\Service\Validation\ValidationAware;

class MinIOS3 extends AbstractS3 implements AdapterInterface, ValidationAware
{
    use AdapterTrait;



    protected $_validation_rules = [
        'key' => 'required',
        'secret' => 'required',
        'region' => 'required',
        'space' => 'required',
    ];

    public function __construct($settings = [])
    {
        $this->settings = $settings;
        $client = new S3Client([
            'credentials' => [
                'key'    => $settings['key'],
                'secret' => $settings['secret']
            ],

            'region' => $settings['region'],
            'version' => 'latest',
            'endpoint' => 'https://master.fasttrackcdn.com:9000',
            'use_path_style_endpoint' => true,
            'exception_class' => \ExpressionEngine\Dependency\Aws\S3\Exception\S3Exception::class
        ]);

        parent::__construct($client, $settings['space']);
    }

    public static function getSettingsForm($settings)
    {
        return [
            [
                'title' => 'Key',
                'desc' => 'Enter your Min.io Key',
                'fields' => [
                    'adapter_settings[key]' => [
                        'type' => 'text',
                        'value' => $settings['key'] ?? '',
                        'required' => true
                    ]
                ]
            ],
            [
                'title' => 'Secret',
                'desc' => 'Enter your Min.io Secret',
                'fields' => [
                    'adapter_settings[secret]' => [
                        'type' => 'text',
                        'value' => $settings['secret'] ?? '',
                        'required' => true
                    ]
                ]
            ],
            [
                'title' => 'Region',
                'desc' => 'Select the region for your Min.io Space',
                'fields' => [
                    'adapter_settings[region]' => [
                        'type' => 'dropdown',
                        'choices' => \CloudFiles\Adapter\MinIOS3::listAvailableRegions(),
                        'value' => $settings['region'] ?? '',
                        'required' => true
                    ]
                ]
            ],
            [
                'title' => 'Space Name',
                'desc' => 'Enter the name of your Min.io Space',
                'fields' => [
                    'adapter_settings[space]' => [
                        'type' => 'text',
                        'value' => $settings['space'] ?? '',
                        'required' => true
                    ]
                ]
            ],
            [
                'title' => 'Path',
                'desc' => 'Enter the path inside your Min.io Space',
                'fields' => [
                    'server_path' => [
                        'type' => 'text',
                        'value' => $settings['server_path'] ?? '',
                        'required' => false
                    ]
                ]
            ],
            [
                'title' => 'Url',
                'desc' => 'Enter the url used to access your Min.io Space',
                'fields' => [
                    'url' => [
                        'type' => 'text',
                        'value' => $settings['url'] ?? '',
                        'required' => false
                    ]
                ]
            ]
        ];
    }

    public static function listAvailableRegions()
    {
        return [
            'master' => 'SW CDN',
        ];
    }

    public function getBaseUrl()
    {
        return implode('/', array_filter([
            'https://'.$this->settings['region'].'.fasttrackcdn.com:9000',
            $this->getBucket(),
            $this->getPathPrefix()
        ]));
    }
}

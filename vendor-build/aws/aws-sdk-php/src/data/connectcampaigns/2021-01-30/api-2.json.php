<?php

namespace ExpressionEngine\Dependency;

// This file was auto-generated from sdk-root/src/data/connectcampaigns/2021-01-30/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2021-01-30', 'endpointPrefix' => 'connect-campaigns', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AmazonConnectCampaignService', 'serviceId' => 'ConnectCampaigns', 'signatureVersion' => 'v4', 'signingName' => 'connect-campaigns', 'uid' => 'connectcampaigns-2021-01-30'], 'operations' => ['CreateCampaign' => ['name' => 'CreateCampaign', 'http' => ['method' => 'PUT', 'requestUri' => '/campaigns', 'responseCode' => 200], 'input' => ['shape' => 'CreateCampaignRequest'], 'output' => ['shape' => 'CreateCampaignResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ThrottlingException']], 'idempotent' => \true], 'DeleteCampaign' => ['name' => 'DeleteCampaign', 'http' => ['method' => 'DELETE', 'requestUri' => '/campaigns/{id}', 'responseCode' => 200], 'input' => ['shape' => 'DeleteCampaignRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException']], 'idempotent' => \true], 'DeleteConnectInstanceConfig' => ['name' => 'DeleteConnectInstanceConfig', 'http' => ['method' => 'DELETE', 'requestUri' => '/connect-instance/{connectInstanceId}/config', 'responseCode' => 200], 'input' => ['shape' => 'DeleteConnectInstanceConfigRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InvalidStateException'], ['shape' => 'ThrottlingException']], 'idempotent' => \true], 'DeleteInstanceOnboardingJob' => ['name' => 'DeleteInstanceOnboardingJob', 'http' => ['method' => 'DELETE', 'requestUri' => '/connect-instance/{connectInstanceId}/onboarding', 'responseCode' => 200], 'input' => ['shape' => 'DeleteInstanceOnboardingJobRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InvalidStateException']], 'idempotent' => \true], 'DescribeCampaign' => ['name' => 'DescribeCampaign', 'http' => ['method' => 'GET', 'requestUri' => '/campaigns/{id}', 'responseCode' => 200], 'input' => ['shape' => 'DescribeCampaignRequest'], 'output' => ['shape' => 'DescribeCampaignResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException']]], 'GetCampaignState' => ['name' => 'GetCampaignState', 'http' => ['method' => 'GET', 'requestUri' => '/campaigns/{id}/state', 'responseCode' => 200], 'input' => ['shape' => 'GetCampaignStateRequest'], 'output' => ['shape' => 'GetCampaignStateResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']]], 'GetCampaignStateBatch' => ['name' => 'GetCampaignStateBatch', 'http' => ['method' => 'POST', 'requestUri' => '/campaigns-state', 'responseCode' => 200], 'input' => ['shape' => 'GetCampaignStateBatchRequest'], 'output' => ['shape' => 'GetCampaignStateBatchResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']]], 'GetConnectInstanceConfig' => ['name' => 'GetConnectInstanceConfig', 'http' => ['method' => 'GET', 'requestUri' => '/connect-instance/{connectInstanceId}/config', 'responseCode' => 200], 'input' => ['shape' => 'GetConnectInstanceConfigRequest'], 'output' => ['shape' => 'GetConnectInstanceConfigResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException']]], 'GetInstanceOnboardingJobStatus' => ['name' => 'GetInstanceOnboardingJobStatus', 'http' => ['method' => 'GET', 'requestUri' => '/connect-instance/{connectInstanceId}/onboarding', 'responseCode' => 200], 'input' => ['shape' => 'GetInstanceOnboardingJobStatusRequest'], 'output' => ['shape' => 'GetInstanceOnboardingJobStatusResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException']]], 'ListCampaigns' => ['name' => 'ListCampaigns', 'http' => ['method' => 'POST', 'requestUri' => '/campaigns-summary', 'responseCode' => 200], 'input' => ['shape' => 'ListCampaignsRequest'], 'output' => ['shape' => 'ListCampaignsResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException']]], 'ListTagsForResource' => ['name' => 'ListTagsForResource', 'http' => ['method' => 'GET', 'requestUri' => '/tags/{arn}', 'responseCode' => 200], 'input' => ['shape' => 'ListTagsForResourceRequest'], 'output' => ['shape' => 'ListTagsForResourceResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']], 'idempotent' => \true], 'PauseCampaign' => ['name' => 'PauseCampaign', 'http' => ['method' => 'POST', 'requestUri' => '/campaigns/{id}/pause', 'responseCode' => 200], 'input' => ['shape' => 'PauseCampaignRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InvalidCampaignStateException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']]], 'PutDialRequestBatch' => ['name' => 'PutDialRequestBatch', 'http' => ['method' => 'PUT', 'requestUri' => '/campaigns/{id}/dial-requests', 'responseCode' => 200], 'input' => ['shape' => 'PutDialRequestBatchRequest'], 'output' => ['shape' => 'PutDialRequestBatchResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InvalidCampaignStateException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']], 'idempotent' => \true], 'ResumeCampaign' => ['name' => 'ResumeCampaign', 'http' => ['method' => 'POST', 'requestUri' => '/campaigns/{id}/resume', 'responseCode' => 200], 'input' => ['shape' => 'ResumeCampaignRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InvalidCampaignStateException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']]], 'StartCampaign' => ['name' => 'StartCampaign', 'http' => ['method' => 'POST', 'requestUri' => '/campaigns/{id}/start', 'responseCode' => 200], 'input' => ['shape' => 'StartCampaignRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InvalidCampaignStateException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']]], 'StartInstanceOnboardingJob' => ['name' => 'StartInstanceOnboardingJob', 'http' => ['method' => 'PUT', 'requestUri' => '/connect-instance/{connectInstanceId}/onboarding', 'responseCode' => 200], 'input' => ['shape' => 'StartInstanceOnboardingJobRequest'], 'output' => ['shape' => 'StartInstanceOnboardingJobResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']], 'idempotent' => \true], 'StopCampaign' => ['name' => 'StopCampaign', 'http' => ['method' => 'POST', 'requestUri' => '/campaigns/{id}/stop', 'responseCode' => 200], 'input' => ['shape' => 'StopCampaignRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InvalidCampaignStateException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/tags/{arn}', 'responseCode' => 200], 'input' => ['shape' => 'TagResourceRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']], 'idempotent' => \true], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'DELETE', 'requestUri' => '/tags/{arn}', 'responseCode' => 200], 'input' => ['shape' => 'UntagResourceRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']], 'idempotent' => \true], 'UpdateCampaignDialerConfig' => ['name' => 'UpdateCampaignDialerConfig', 'http' => ['method' => 'POST', 'requestUri' => '/campaigns/{id}/dialer-config', 'responseCode' => 200], 'input' => ['shape' => 'UpdateCampaignDialerConfigRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'AccessDeniedException']], 'idempotent' => \true], 'UpdateCampaignName' => ['name' => 'UpdateCampaignName', 'http' => ['method' => 'POST', 'requestUri' => '/campaigns/{id}/name', 'responseCode' => 200], 'input' => ['shape' => 'UpdateCampaignNameRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'AccessDeniedException']], 'idempotent' => \true], 'UpdateCampaignOutboundCallConfig' => ['name' => 'UpdateCampaignOutboundCallConfig', 'http' => ['method' => 'POST', 'requestUri' => '/campaigns/{id}/outbound-call-config', 'responseCode' => 200], 'input' => ['shape' => 'UpdateCampaignOutboundCallConfigRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException']], 'idempotent' => \true]], 'shapes' => ['AccessDeniedException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String'], 'xAmzErrorType' => ['shape' => 'XAmazonErrorType', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType']], 'error' => ['httpStatusCode' => 403, 'senderFault' => \true], 'exception' => \true], 'AnswerMachineDetectionConfig' => ['type' => 'structure', 'required' => ['enableAnswerMachineDetection'], 'members' => ['enableAnswerMachineDetection' => ['shape' => 'Boolean']]], 'Arn' => ['type' => 'string', 'max' => 500, 'min' => 20, 'pattern' => '^arn:.*'], 'AttributeName' => ['type' => 'string', 'max' => 32767, 'min' => 0, 'pattern' => '^[a-zA-Z0-9\\-_]+$'], 'AttributeValue' => ['type' => 'string', 'max' => 32767, 'min' => 0], 'Attributes' => ['type' => 'map', 'key' => ['shape' => 'AttributeName'], 'value' => ['shape' => 'AttributeValue'], 'sensitive' => \true], 'BandwidthAllocation' => ['type' => 'double', 'box' => \true, 'max' => 1, 'min' => 0], 'Boolean' => ['type' => 'boolean', 'box' => \true], 'Campaign' => ['type' => 'structure', 'required' => ['arn', 'connectInstanceId', 'dialerConfig', 'id', 'name', 'outboundCallConfig'], 'members' => ['arn' => ['shape' => 'CampaignArn'], 'connectInstanceId' => ['shape' => 'InstanceId'], 'dialerConfig' => ['shape' => 'DialerConfig'], 'id' => ['shape' => 'CampaignId'], 'name' => ['shape' => 'CampaignName'], 'outboundCallConfig' => ['shape' => 'OutboundCallConfig'], 'tags' => ['shape' => 'TagMap']]], 'CampaignArn' => ['type' => 'string', 'max' => 500, 'min' => 20], 'CampaignFilters' => ['type' => 'structure', 'members' => ['instanceIdFilter' => ['shape' => 'InstanceIdFilter']]], 'CampaignId' => ['type' => 'string', 'max' => 256, 'min' => 0], 'CampaignName' => ['type' => 'string', 'max' => 127, 'min' => 1], 'CampaignState' => ['type' => 'string', 'enum' => ['Initialized', 'Running', 'Paused', 'Stopped', 'Failed']], 'CampaignSummary' => ['type' => 'structure', 'required' => ['arn', 'connectInstanceId', 'id', 'name'], 'members' => ['arn' => ['shape' => 'CampaignArn'], 'connectInstanceId' => ['shape' => 'InstanceId'], 'id' => ['shape' => 'CampaignId'], 'name' => ['shape' => 'CampaignName']]], 'CampaignSummaryList' => ['type' => 'list', 'member' => ['shape' => 'CampaignSummary']], 'ClientToken' => ['type' => 'string', 'max' => 64, 'min' => 0], 'ConflictException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String'], 'xAmzErrorType' => ['shape' => 'XAmazonErrorType', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType']], 'error' => ['httpStatusCode' => 409, 'senderFault' => \true], 'exception' => \true], 'ContactFlowId' => ['type' => 'string', 'max' => 500, 'min' => 0], 'CreateCampaignRequest' => ['type' => 'structure', 'required' => ['connectInstanceId', 'dialerConfig', 'name', 'outboundCallConfig'], 'members' => ['connectInstanceId' => ['shape' => 'InstanceId'], 'dialerConfig' => ['shape' => 'DialerConfig'], 'name' => ['shape' => 'CampaignName'], 'outboundCallConfig' => ['shape' => 'OutboundCallConfig'], 'tags' => ['shape' => 'TagMap']]], 'CreateCampaignResponse' => ['type' => 'structure', 'members' => ['arn' => ['shape' => 'CampaignArn'], 'id' => ['shape' => 'CampaignId'], 'tags' => ['shape' => 'TagMap']]], 'DeleteCampaignRequest' => ['type' => 'structure', 'required' => ['id'], 'members' => ['id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'DeleteConnectInstanceConfigRequest' => ['type' => 'structure', 'required' => ['connectInstanceId'], 'members' => ['connectInstanceId' => ['shape' => 'InstanceId', 'location' => 'uri', 'locationName' => 'connectInstanceId']]], 'DeleteInstanceOnboardingJobRequest' => ['type' => 'structure', 'required' => ['connectInstanceId'], 'members' => ['connectInstanceId' => ['shape' => 'InstanceId', 'location' => 'uri', 'locationName' => 'connectInstanceId']]], 'DescribeCampaignRequest' => ['type' => 'structure', 'required' => ['id'], 'members' => ['id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'DescribeCampaignResponse' => ['type' => 'structure', 'members' => ['campaign' => ['shape' => 'Campaign']]], 'DestinationPhoneNumber' => ['type' => 'string', 'max' => 20, 'min' => 0, 'sensitive' => \true], 'DialRequest' => ['type' => 'structure', 'required' => ['attributes', 'clientToken', 'expirationTime', 'phoneNumber'], 'members' => ['attributes' => ['shape' => 'Attributes'], 'clientToken' => ['shape' => 'ClientToken'], 'expirationTime' => ['shape' => 'TimeStamp'], 'phoneNumber' => ['shape' => 'DestinationPhoneNumber']]], 'DialRequestId' => ['type' => 'string'], 'DialRequestList' => ['type' => 'list', 'member' => ['shape' => 'DialRequest'], 'max' => 25, 'min' => 1], 'DialerConfig' => ['type' => 'structure', 'members' => ['predictiveDialerConfig' => ['shape' => 'PredictiveDialerConfig'], 'progressiveDialerConfig' => ['shape' => 'ProgressiveDialerConfig']], 'union' => \true], 'Enabled' => ['type' => 'boolean'], 'EncryptionConfig' => ['type' => 'structure', 'required' => ['enabled'], 'members' => ['enabled' => ['shape' => 'Enabled'], 'encryptionType' => ['shape' => 'EncryptionType'], 'keyArn' => ['shape' => 'EncryptionKey']]], 'EncryptionKey' => ['type' => 'string', 'max' => 500, 'min' => 0], 'EncryptionType' => ['type' => 'string', 'enum' => ['KMS']], 'FailedCampaignStateResponse' => ['type' => 'structure', 'members' => ['campaignId' => ['shape' => 'CampaignId'], 'failureCode' => ['shape' => 'GetCampaignStateBatchFailureCode']]], 'FailedCampaignStateResponseList' => ['type' => 'list', 'member' => ['shape' => 'FailedCampaignStateResponse'], 'max' => 25, 'min' => 0], 'FailedRequest' => ['type' => 'structure', 'members' => ['clientToken' => ['shape' => 'ClientToken'], 'failureCode' => ['shape' => 'FailureCode'], 'id' => ['shape' => 'DialRequestId']]], 'FailedRequestList' => ['type' => 'list', 'member' => ['shape' => 'FailedRequest'], 'max' => 25, 'min' => 0], 'FailureCode' => ['type' => 'string', 'enum' => ['InvalidInput', 'RequestThrottled', 'UnknownError']], 'GetCampaignStateBatchFailureCode' => ['type' => 'string', 'enum' => ['ResourceNotFound', 'UnknownError']], 'GetCampaignStateBatchRequest' => ['type' => 'structure', 'required' => ['campaignIds'], 'members' => ['campaignIds' => ['shape' => 'GetCampaignStateBatchRequestCampaignIdsList']]], 'GetCampaignStateBatchRequestCampaignIdsList' => ['type' => 'list', 'member' => ['shape' => 'CampaignId'], 'max' => 25, 'min' => 1], 'GetCampaignStateBatchResponse' => ['type' => 'structure', 'members' => ['failedRequests' => ['shape' => 'FailedCampaignStateResponseList'], 'successfulRequests' => ['shape' => 'SuccessfulCampaignStateResponseList']]], 'GetCampaignStateRequest' => ['type' => 'structure', 'required' => ['id'], 'members' => ['id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'GetCampaignStateResponse' => ['type' => 'structure', 'members' => ['state' => ['shape' => 'CampaignState']]], 'GetConnectInstanceConfigRequest' => ['type' => 'structure', 'required' => ['connectInstanceId'], 'members' => ['connectInstanceId' => ['shape' => 'InstanceId', 'location' => 'uri', 'locationName' => 'connectInstanceId']]], 'GetConnectInstanceConfigResponse' => ['type' => 'structure', 'members' => ['connectInstanceConfig' => ['shape' => 'InstanceConfig']]], 'GetInstanceOnboardingJobStatusRequest' => ['type' => 'structure', 'required' => ['connectInstanceId'], 'members' => ['connectInstanceId' => ['shape' => 'InstanceId', 'location' => 'uri', 'locationName' => 'connectInstanceId']]], 'GetInstanceOnboardingJobStatusResponse' => ['type' => 'structure', 'members' => ['connectInstanceOnboardingJobStatus' => ['shape' => 'InstanceOnboardingJobStatus']]], 'InstanceConfig' => ['type' => 'structure', 'required' => ['connectInstanceId', 'encryptionConfig', 'serviceLinkedRoleArn'], 'members' => ['connectInstanceId' => ['shape' => 'InstanceId'], 'encryptionConfig' => ['shape' => 'EncryptionConfig'], 'serviceLinkedRoleArn' => ['shape' => 'ServiceLinkedRoleArn']]], 'InstanceId' => ['type' => 'string', 'max' => 256, 'min' => 0], 'InstanceIdFilter' => ['type' => 'structure', 'required' => ['operator', 'value'], 'members' => ['operator' => ['shape' => 'InstanceIdFilterOperator'], 'value' => ['shape' => 'InstanceId']]], 'InstanceIdFilterOperator' => ['type' => 'string', 'enum' => ['Eq']], 'InstanceOnboardingJobFailureCode' => ['type' => 'string', 'enum' => ['EVENT_BRIDGE_ACCESS_DENIED', 'EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED', 'IAM_ACCESS_DENIED', 'KMS_ACCESS_DENIED', 'KMS_KEY_NOT_FOUND', 'INTERNAL_FAILURE']], 'InstanceOnboardingJobStatus' => ['type' => 'structure', 'required' => ['connectInstanceId', 'status'], 'members' => ['connectInstanceId' => ['shape' => 'InstanceId'], 'failureCode' => ['shape' => 'InstanceOnboardingJobFailureCode'], 'status' => ['shape' => 'InstanceOnboardingJobStatusCode']]], 'InstanceOnboardingJobStatusCode' => ['type' => 'string', 'enum' => ['IN_PROGRESS', 'SUCCEEDED', 'FAILED']], 'InternalServerException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String'], 'xAmzErrorType' => ['shape' => 'XAmazonErrorType', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType']], 'error' => ['httpStatusCode' => 500], 'exception' => \true, 'fault' => \true, 'retryable' => ['throttling' => \false]], 'InvalidCampaignStateException' => ['type' => 'structure', 'required' => ['message', 'state'], 'members' => ['message' => ['shape' => 'String'], 'state' => ['shape' => 'CampaignState'], 'xAmzErrorType' => ['shape' => 'XAmazonErrorType', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType']], 'error' => ['httpStatusCode' => 409, 'senderFault' => \true], 'exception' => \true], 'InvalidStateException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String'], 'xAmzErrorType' => ['shape' => 'XAmazonErrorType', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType']], 'error' => ['httpStatusCode' => 409, 'senderFault' => \true], 'exception' => \true], 'ListCampaignsRequest' => ['type' => 'structure', 'members' => ['filters' => ['shape' => 'CampaignFilters'], 'maxResults' => ['shape' => 'MaxResults'], 'nextToken' => ['shape' => 'NextToken']]], 'ListCampaignsResponse' => ['type' => 'structure', 'members' => ['campaignSummaryList' => ['shape' => 'CampaignSummaryList'], 'nextToken' => ['shape' => 'NextToken']]], 'ListTagsForResourceRequest' => ['type' => 'structure', 'required' => ['arn'], 'members' => ['arn' => ['shape' => 'Arn', 'location' => 'uri', 'locationName' => 'arn']]], 'ListTagsForResourceResponse' => ['type' => 'structure', 'members' => ['tags' => ['shape' => 'TagMap']]], 'MaxResults' => ['type' => 'integer', 'box' => \true, 'max' => 50, 'min' => 1], 'NextToken' => ['type' => 'string', 'max' => 1000, 'min' => 0], 'OutboundCallConfig' => ['type' => 'structure', 'required' => ['connectContactFlowId', 'connectQueueId'], 'members' => ['answerMachineDetectionConfig' => ['shape' => 'AnswerMachineDetectionConfig'], 'connectContactFlowId' => ['shape' => 'ContactFlowId'], 'connectQueueId' => ['shape' => 'QueueId'], 'connectSourcePhoneNumber' => ['shape' => 'SourcePhoneNumber']]], 'PauseCampaignRequest' => ['type' => 'structure', 'required' => ['id'], 'members' => ['id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'PredictiveDialerConfig' => ['type' => 'structure', 'required' => ['bandwidthAllocation'], 'members' => ['bandwidthAllocation' => ['shape' => 'BandwidthAllocation']]], 'ProgressiveDialerConfig' => ['type' => 'structure', 'required' => ['bandwidthAllocation'], 'members' => ['bandwidthAllocation' => ['shape' => 'BandwidthAllocation']]], 'PutDialRequestBatchRequest' => ['type' => 'structure', 'required' => ['dialRequests', 'id'], 'members' => ['dialRequests' => ['shape' => 'DialRequestList'], 'id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'PutDialRequestBatchResponse' => ['type' => 'structure', 'members' => ['failedRequests' => ['shape' => 'FailedRequestList'], 'successfulRequests' => ['shape' => 'SuccessfulRequestList']]], 'QueueId' => ['type' => 'string', 'max' => 500, 'min' => 0], 'ResourceNotFoundException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String'], 'xAmzErrorType' => ['shape' => 'XAmazonErrorType', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType']], 'error' => ['httpStatusCode' => 404, 'senderFault' => \true], 'exception' => \true], 'ResumeCampaignRequest' => ['type' => 'structure', 'required' => ['id'], 'members' => ['id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'ServiceLinkedRoleArn' => ['type' => 'string', 'max' => 256, 'min' => 0], 'ServiceQuotaExceededException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String'], 'xAmzErrorType' => ['shape' => 'XAmazonErrorType', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType']], 'error' => ['httpStatusCode' => 402, 'senderFault' => \true], 'exception' => \true], 'SourcePhoneNumber' => ['type' => 'string', 'max' => 100, 'min' => 0], 'StartCampaignRequest' => ['type' => 'structure', 'required' => ['id'], 'members' => ['id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'StartInstanceOnboardingJobRequest' => ['type' => 'structure', 'required' => ['connectInstanceId', 'encryptionConfig'], 'members' => ['connectInstanceId' => ['shape' => 'InstanceId', 'location' => 'uri', 'locationName' => 'connectInstanceId'], 'encryptionConfig' => ['shape' => 'EncryptionConfig']]], 'StartInstanceOnboardingJobResponse' => ['type' => 'structure', 'members' => ['connectInstanceOnboardingJobStatus' => ['shape' => 'InstanceOnboardingJobStatus']]], 'StopCampaignRequest' => ['type' => 'structure', 'required' => ['id'], 'members' => ['id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'String' => ['type' => 'string'], 'SuccessfulCampaignStateResponse' => ['type' => 'structure', 'members' => ['campaignId' => ['shape' => 'CampaignId'], 'state' => ['shape' => 'CampaignState']]], 'SuccessfulCampaignStateResponseList' => ['type' => 'list', 'member' => ['shape' => 'SuccessfulCampaignStateResponse'], 'max' => 25, 'min' => 0], 'SuccessfulRequest' => ['type' => 'structure', 'members' => ['clientToken' => ['shape' => 'ClientToken'], 'id' => ['shape' => 'DialRequestId']]], 'SuccessfulRequestList' => ['type' => 'list', 'member' => ['shape' => 'SuccessfulRequest'], 'max' => 25, 'min' => 0], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$'], 'TagKeyList' => ['type' => 'list', 'member' => ['shape' => 'TagKey'], 'max' => 50, 'min' => 0], 'TagMap' => ['type' => 'map', 'key' => ['shape' => 'TagKey'], 'value' => ['shape' => 'TagValue']], 'TagResourceRequest' => ['type' => 'structure', 'required' => ['arn', 'tags'], 'members' => ['arn' => ['shape' => 'Arn', 'location' => 'uri', 'locationName' => 'arn'], 'tags' => ['shape' => 'TagMap']]], 'TagValue' => ['type' => 'string', 'max' => 256, 'min' => 0], 'ThrottlingException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String'], 'xAmzErrorType' => ['shape' => 'XAmazonErrorType', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType']], 'error' => ['httpStatusCode' => 429, 'senderFault' => \true], 'exception' => \true, 'retryable' => ['throttling' => \false]], 'TimeStamp' => ['type' => 'timestamp', 'timestampFormat' => 'iso8601'], 'UntagResourceRequest' => ['type' => 'structure', 'required' => ['arn', 'tagKeys'], 'members' => ['arn' => ['shape' => 'Arn', 'location' => 'uri', 'locationName' => 'arn'], 'tagKeys' => ['shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys']]], 'UpdateCampaignDialerConfigRequest' => ['type' => 'structure', 'required' => ['dialerConfig', 'id'], 'members' => ['dialerConfig' => ['shape' => 'DialerConfig'], 'id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'UpdateCampaignNameRequest' => ['type' => 'structure', 'required' => ['id', 'name'], 'members' => ['id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id'], 'name' => ['shape' => 'CampaignName']]], 'UpdateCampaignOutboundCallConfigRequest' => ['type' => 'structure', 'required' => ['id'], 'members' => ['answerMachineDetectionConfig' => ['shape' => 'AnswerMachineDetectionConfig'], 'connectContactFlowId' => ['shape' => 'ContactFlowId'], 'connectSourcePhoneNumber' => ['shape' => 'SourcePhoneNumber'], 'id' => ['shape' => 'CampaignId', 'location' => 'uri', 'locationName' => 'id']]], 'ValidationException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String'], 'xAmzErrorType' => ['shape' => 'XAmazonErrorType', 'location' => 'header', 'locationName' => 'x-amzn-ErrorType']], 'error' => ['httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'XAmazonErrorType' => ['type' => 'string']]];

<?php

namespace ExpressionEngine\Dependency;

// This file was auto-generated from sdk-root/src/data/kinesis/2013-12-02/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2013-12-02', 'endpointPrefix' => 'kinesis', 'jsonVersion' => '1.1', 'protocol' => 'json', 'protocolSettings' => ['h2' => 'eventstream'], 'serviceAbbreviation' => 'Kinesis', 'serviceFullName' => 'Amazon Kinesis', 'serviceId' => 'Kinesis', 'signatureVersion' => 'v4', 'targetPrefix' => 'Kinesis_20131202', 'uid' => 'kinesis-2013-12-02'], 'operations' => ['AddTagsToStream' => ['name' => 'AddTagsToStream', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'AddTagsToStreamInput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceInUseException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'CreateStream' => ['name' => 'CreateStream', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateStreamInput'], 'errors' => [['shape' => 'ResourceInUseException'], ['shape' => 'LimitExceededException'], ['shape' => 'InvalidArgumentException']]], 'DecreaseStreamRetentionPeriod' => ['name' => 'DecreaseStreamRetentionPeriod', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DecreaseStreamRetentionPeriodInput'], 'errors' => [['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'LimitExceededException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'DeleteStream' => ['name' => 'DeleteStream', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteStreamInput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'LimitExceededException'], ['shape' => 'ResourceInUseException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'DeregisterStreamConsumer' => ['name' => 'DeregisterStreamConsumer', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeregisterStreamConsumerInput'], 'errors' => [['shape' => 'LimitExceededException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgumentException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'DescribeLimits' => ['name' => 'DescribeLimits', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeLimitsInput'], 'output' => ['shape' => 'DescribeLimitsOutput'], 'errors' => [['shape' => 'LimitExceededException']]], 'DescribeStream' => ['name' => 'DescribeStream', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeStreamInput'], 'output' => ['shape' => 'DescribeStreamOutput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'LimitExceededException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'DescribeStreamConsumer' => ['name' => 'DescribeStreamConsumer', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeStreamConsumerInput'], 'output' => ['shape' => 'DescribeStreamConsumerOutput'], 'errors' => [['shape' => 'LimitExceededException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgumentException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'DescribeStreamSummary' => ['name' => 'DescribeStreamSummary', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeStreamSummaryInput'], 'output' => ['shape' => 'DescribeStreamSummaryOutput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'LimitExceededException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'DisableEnhancedMonitoring' => ['name' => 'DisableEnhancedMonitoring', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DisableEnhancedMonitoringInput'], 'output' => ['shape' => 'EnhancedMonitoringOutput'], 'errors' => [['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'EnableEnhancedMonitoring' => ['name' => 'EnableEnhancedMonitoring', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'EnableEnhancedMonitoringInput'], 'output' => ['shape' => 'EnhancedMonitoringOutput'], 'errors' => [['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'GetRecords' => ['name' => 'GetRecords', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetRecordsInput'], 'output' => ['shape' => 'GetRecordsOutput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'ExpiredIteratorException'], ['shape' => 'KMSDisabledException'], ['shape' => 'KMSInvalidStateException'], ['shape' => 'KMSAccessDeniedException'], ['shape' => 'KMSNotFoundException'], ['shape' => 'KMSOptInRequired'], ['shape' => 'KMSThrottlingException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'data']]], 'GetShardIterator' => ['name' => 'GetShardIterator', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetShardIteratorInput'], 'output' => ['shape' => 'GetShardIteratorOutput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'data']]], 'IncreaseStreamRetentionPeriod' => ['name' => 'IncreaseStreamRetentionPeriod', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'IncreaseStreamRetentionPeriodInput'], 'errors' => [['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'LimitExceededException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'ListShards' => ['name' => 'ListShards', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListShardsInput'], 'output' => ['shape' => 'ListShardsOutput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ExpiredNextTokenException'], ['shape' => 'ResourceInUseException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'ListStreamConsumers' => ['name' => 'ListStreamConsumers', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListStreamConsumersInput'], 'output' => ['shape' => 'ListStreamConsumersOutput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ExpiredNextTokenException'], ['shape' => 'ResourceInUseException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'ListStreams' => ['name' => 'ListStreams', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListStreamsInput'], 'output' => ['shape' => 'ListStreamsOutput'], 'errors' => [['shape' => 'LimitExceededException'], ['shape' => 'ExpiredNextTokenException'], ['shape' => 'InvalidArgumentException']]], 'ListTagsForStream' => ['name' => 'ListTagsForStream', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListTagsForStreamInput'], 'output' => ['shape' => 'ListTagsForStreamOutput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'MergeShards' => ['name' => 'MergeShards', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'MergeShardsInput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceInUseException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'PutRecord' => ['name' => 'PutRecord', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'PutRecordInput'], 'output' => ['shape' => 'PutRecordOutput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'KMSDisabledException'], ['shape' => 'KMSInvalidStateException'], ['shape' => 'KMSAccessDeniedException'], ['shape' => 'KMSNotFoundException'], ['shape' => 'KMSOptInRequired'], ['shape' => 'KMSThrottlingException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'data']]], 'PutRecords' => ['name' => 'PutRecords', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'PutRecordsInput'], 'output' => ['shape' => 'PutRecordsOutput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'KMSDisabledException'], ['shape' => 'KMSInvalidStateException'], ['shape' => 'KMSAccessDeniedException'], ['shape' => 'KMSNotFoundException'], ['shape' => 'KMSOptInRequired'], ['shape' => 'KMSThrottlingException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'data']]], 'RegisterStreamConsumer' => ['name' => 'RegisterStreamConsumer', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'RegisterStreamConsumerInput'], 'output' => ['shape' => 'RegisterStreamConsumerOutput'], 'errors' => [['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'RemoveTagsFromStream' => ['name' => 'RemoveTagsFromStream', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'RemoveTagsFromStreamInput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceInUseException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'SplitShard' => ['name' => 'SplitShard', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'SplitShardInput'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceInUseException'], ['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'StartStreamEncryption' => ['name' => 'StartStreamEncryption', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartStreamEncryptionInput'], 'errors' => [['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'KMSDisabledException'], ['shape' => 'KMSInvalidStateException'], ['shape' => 'KMSAccessDeniedException'], ['shape' => 'KMSNotFoundException'], ['shape' => 'KMSOptInRequired'], ['shape' => 'KMSThrottlingException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'StopStreamEncryption' => ['name' => 'StopStreamEncryption', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StopStreamEncryptionInput'], 'errors' => [['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'UpdateShardCount' => ['name' => 'UpdateShardCount', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateShardCountInput'], 'output' => ['shape' => 'UpdateShardCountOutput'], 'errors' => [['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]], 'UpdateStreamMode' => ['name' => 'UpdateStreamMode', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateStreamModeInput'], 'errors' => [['shape' => 'InvalidArgumentException'], ['shape' => 'LimitExceededException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException']], 'staticContextParams' => ['OperationType' => ['value' => 'control']]]], 'shapes' => ['AccessDeniedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'AddTagsToStreamInput' => ['type' => 'structure', 'required' => ['Tags'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'Tags' => ['shape' => 'TagMap'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'BooleanObject' => ['type' => 'boolean'], 'ChildShard' => ['type' => 'structure', 'required' => ['ShardId', 'ParentShards', 'HashKeyRange'], 'members' => ['ShardId' => ['shape' => 'ShardId'], 'ParentShards' => ['shape' => 'ShardIdList'], 'HashKeyRange' => ['shape' => 'HashKeyRange']]], 'ChildShardList' => ['type' => 'list', 'member' => ['shape' => 'ChildShard']], 'Consumer' => ['type' => 'structure', 'required' => ['ConsumerName', 'ConsumerARN', 'ConsumerStatus', 'ConsumerCreationTimestamp'], 'members' => ['ConsumerName' => ['shape' => 'ConsumerName'], 'ConsumerARN' => ['shape' => 'ConsumerARN'], 'ConsumerStatus' => ['shape' => 'ConsumerStatus'], 'ConsumerCreationTimestamp' => ['shape' => 'Timestamp']]], 'ConsumerARN' => ['type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^(arn):aws.*:kinesis:.*:\\d{12}:.*stream\\/[a-zA-Z0-9_.-]+\\/consumer\\/[a-zA-Z0-9_.-]+:[0-9]+'], 'ConsumerCountObject' => ['type' => 'integer', 'max' => 1000000, 'min' => 0], 'ConsumerDescription' => ['type' => 'structure', 'required' => ['ConsumerName', 'ConsumerARN', 'ConsumerStatus', 'ConsumerCreationTimestamp', 'StreamARN'], 'members' => ['ConsumerName' => ['shape' => 'ConsumerName'], 'ConsumerARN' => ['shape' => 'ConsumerARN'], 'ConsumerStatus' => ['shape' => 'ConsumerStatus'], 'ConsumerCreationTimestamp' => ['shape' => 'Timestamp'], 'StreamARN' => ['shape' => 'StreamARN']]], 'ConsumerList' => ['type' => 'list', 'member' => ['shape' => 'Consumer']], 'ConsumerName' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+'], 'ConsumerStatus' => ['type' => 'string', 'enum' => ['CREATING', 'DELETING', 'ACTIVE']], 'CreateStreamInput' => ['type' => 'structure', 'required' => ['StreamName'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'ShardCount' => ['shape' => 'PositiveIntegerObject'], 'StreamModeDetails' => ['shape' => 'StreamModeDetails']]], 'Data' => ['type' => 'blob', 'max' => 1048576, 'min' => 0], 'DecreaseStreamRetentionPeriodInput' => ['type' => 'structure', 'required' => ['RetentionPeriodHours'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'RetentionPeriodHours' => ['shape' => 'RetentionPeriodHours'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'DeleteStreamInput' => ['type' => 'structure', 'members' => ['StreamName' => ['shape' => 'StreamName'], 'EnforceConsumerDeletion' => ['shape' => 'BooleanObject'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'DeregisterStreamConsumerInput' => ['type' => 'structure', 'members' => ['StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']], 'ConsumerName' => ['shape' => 'ConsumerName'], 'ConsumerARN' => ['shape' => 'ConsumerARN', 'contextParam' => ['name' => 'ConsumerARN']]]], 'DescribeLimitsInput' => ['type' => 'structure', 'members' => []], 'DescribeLimitsOutput' => ['type' => 'structure', 'required' => ['ShardLimit', 'OpenShardCount', 'OnDemandStreamCount', 'OnDemandStreamCountLimit'], 'members' => ['ShardLimit' => ['shape' => 'ShardCountObject'], 'OpenShardCount' => ['shape' => 'ShardCountObject'], 'OnDemandStreamCount' => ['shape' => 'OnDemandStreamCountObject'], 'OnDemandStreamCountLimit' => ['shape' => 'OnDemandStreamCountLimitObject']]], 'DescribeStreamConsumerInput' => ['type' => 'structure', 'members' => ['StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']], 'ConsumerName' => ['shape' => 'ConsumerName'], 'ConsumerARN' => ['shape' => 'ConsumerARN', 'contextParam' => ['name' => 'ConsumerARN']]]], 'DescribeStreamConsumerOutput' => ['type' => 'structure', 'required' => ['ConsumerDescription'], 'members' => ['ConsumerDescription' => ['shape' => 'ConsumerDescription']]], 'DescribeStreamInput' => ['type' => 'structure', 'members' => ['StreamName' => ['shape' => 'StreamName'], 'Limit' => ['shape' => 'DescribeStreamInputLimit'], 'ExclusiveStartShardId' => ['shape' => 'ShardId'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'DescribeStreamInputLimit' => ['type' => 'integer', 'max' => 10000, 'min' => 1], 'DescribeStreamOutput' => ['type' => 'structure', 'required' => ['StreamDescription'], 'members' => ['StreamDescription' => ['shape' => 'StreamDescription']]], 'DescribeStreamSummaryInput' => ['type' => 'structure', 'members' => ['StreamName' => ['shape' => 'StreamName'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'DescribeStreamSummaryOutput' => ['type' => 'structure', 'required' => ['StreamDescriptionSummary'], 'members' => ['StreamDescriptionSummary' => ['shape' => 'StreamDescriptionSummary']]], 'DisableEnhancedMonitoringInput' => ['type' => 'structure', 'required' => ['ShardLevelMetrics'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'ShardLevelMetrics' => ['shape' => 'MetricsNameList'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'EnableEnhancedMonitoringInput' => ['type' => 'structure', 'required' => ['ShardLevelMetrics'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'ShardLevelMetrics' => ['shape' => 'MetricsNameList'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'EncryptionType' => ['type' => 'string', 'enum' => ['NONE', 'KMS']], 'EnhancedMetrics' => ['type' => 'structure', 'members' => ['ShardLevelMetrics' => ['shape' => 'MetricsNameList']]], 'EnhancedMonitoringList' => ['type' => 'list', 'member' => ['shape' => 'EnhancedMetrics']], 'EnhancedMonitoringOutput' => ['type' => 'structure', 'members' => ['StreamName' => ['shape' => 'StreamName'], 'CurrentShardLevelMetrics' => ['shape' => 'MetricsNameList'], 'DesiredShardLevelMetrics' => ['shape' => 'MetricsNameList'], 'StreamARN' => ['shape' => 'StreamARN']]], 'ErrorCode' => ['type' => 'string'], 'ErrorMessage' => ['type' => 'string'], 'ExpiredIteratorException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ExpiredNextTokenException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'GetRecordsInput' => ['type' => 'structure', 'required' => ['ShardIterator'], 'members' => ['ShardIterator' => ['shape' => 'ShardIterator'], 'Limit' => ['shape' => 'GetRecordsInputLimit'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'GetRecordsInputLimit' => ['type' => 'integer', 'max' => 10000, 'min' => 1], 'GetRecordsOutput' => ['type' => 'structure', 'required' => ['Records'], 'members' => ['Records' => ['shape' => 'RecordList'], 'NextShardIterator' => ['shape' => 'ShardIterator'], 'MillisBehindLatest' => ['shape' => 'MillisBehindLatest'], 'ChildShards' => ['shape' => 'ChildShardList']]], 'GetShardIteratorInput' => ['type' => 'structure', 'required' => ['ShardId', 'ShardIteratorType'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'ShardId' => ['shape' => 'ShardId'], 'ShardIteratorType' => ['shape' => 'ShardIteratorType'], 'StartingSequenceNumber' => ['shape' => 'SequenceNumber'], 'Timestamp' => ['shape' => 'Timestamp'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'GetShardIteratorOutput' => ['type' => 'structure', 'members' => ['ShardIterator' => ['shape' => 'ShardIterator']]], 'HashKey' => ['type' => 'string', 'pattern' => '0|([1-9]\\d{0,38})'], 'HashKeyRange' => ['type' => 'structure', 'required' => ['StartingHashKey', 'EndingHashKey'], 'members' => ['StartingHashKey' => ['shape' => 'HashKey'], 'EndingHashKey' => ['shape' => 'HashKey']]], 'IncreaseStreamRetentionPeriodInput' => ['type' => 'structure', 'required' => ['RetentionPeriodHours'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'RetentionPeriodHours' => ['shape' => 'RetentionPeriodHours'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'InternalFailureException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true, 'fault' => \true], 'InvalidArgumentException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'KMSAccessDeniedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'KMSDisabledException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'KMSInvalidStateException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'KMSNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'KMSOptInRequired' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'KMSThrottlingException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'KeyId' => ['type' => 'string', 'max' => 2048, 'min' => 1], 'LimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ListShardsInput' => ['type' => 'structure', 'members' => ['StreamName' => ['shape' => 'StreamName'], 'NextToken' => ['shape' => 'NextToken'], 'ExclusiveStartShardId' => ['shape' => 'ShardId'], 'MaxResults' => ['shape' => 'ListShardsInputLimit'], 'StreamCreationTimestamp' => ['shape' => 'Timestamp'], 'ShardFilter' => ['shape' => 'ShardFilter'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'ListShardsInputLimit' => ['type' => 'integer', 'max' => 10000, 'min' => 1], 'ListShardsOutput' => ['type' => 'structure', 'members' => ['Shards' => ['shape' => 'ShardList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListStreamConsumersInput' => ['type' => 'structure', 'required' => ['StreamARN'], 'members' => ['StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']], 'NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'ListStreamConsumersInputLimit'], 'StreamCreationTimestamp' => ['shape' => 'Timestamp']]], 'ListStreamConsumersInputLimit' => ['type' => 'integer', 'max' => 10000, 'min' => 1], 'ListStreamConsumersOutput' => ['type' => 'structure', 'members' => ['Consumers' => ['shape' => 'ConsumerList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListStreamsInput' => ['type' => 'structure', 'members' => ['Limit' => ['shape' => 'ListStreamsInputLimit'], 'ExclusiveStartStreamName' => ['shape' => 'StreamName'], 'NextToken' => ['shape' => 'NextToken']]], 'ListStreamsInputLimit' => ['type' => 'integer', 'max' => 10000, 'min' => 1], 'ListStreamsOutput' => ['type' => 'structure', 'required' => ['StreamNames', 'HasMoreStreams'], 'members' => ['StreamNames' => ['shape' => 'StreamNameList'], 'HasMoreStreams' => ['shape' => 'BooleanObject'], 'NextToken' => ['shape' => 'NextToken'], 'StreamSummaries' => ['shape' => 'StreamSummaryList']]], 'ListTagsForStreamInput' => ['type' => 'structure', 'members' => ['StreamName' => ['shape' => 'StreamName'], 'ExclusiveStartTagKey' => ['shape' => 'TagKey'], 'Limit' => ['shape' => 'ListTagsForStreamInputLimit'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'ListTagsForStreamInputLimit' => ['type' => 'integer', 'max' => 50, 'min' => 1], 'ListTagsForStreamOutput' => ['type' => 'structure', 'required' => ['Tags', 'HasMoreTags'], 'members' => ['Tags' => ['shape' => 'TagList'], 'HasMoreTags' => ['shape' => 'BooleanObject']]], 'MergeShardsInput' => ['type' => 'structure', 'required' => ['ShardToMerge', 'AdjacentShardToMerge'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'ShardToMerge' => ['shape' => 'ShardId'], 'AdjacentShardToMerge' => ['shape' => 'ShardId'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'MetricsName' => ['type' => 'string', 'enum' => ['IncomingBytes', 'IncomingRecords', 'OutgoingBytes', 'OutgoingRecords', 'WriteProvisionedThroughputExceeded', 'ReadProvisionedThroughputExceeded', 'IteratorAgeMilliseconds', 'ALL']], 'MetricsNameList' => ['type' => 'list', 'member' => ['shape' => 'MetricsName'], 'max' => 7, 'min' => 1], 'MillisBehindLatest' => ['type' => 'long', 'min' => 0], 'NextToken' => ['type' => 'string', 'max' => 1048576, 'min' => 1], 'OnDemandStreamCountLimitObject' => ['type' => 'integer', 'max' => 1000000, 'min' => 0], 'OnDemandStreamCountObject' => ['type' => 'integer', 'max' => 1000000, 'min' => 0], 'PartitionKey' => ['type' => 'string', 'max' => 256, 'min' => 1], 'PositiveIntegerObject' => ['type' => 'integer', 'min' => 1], 'ProvisionedThroughputExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'PutRecordInput' => ['type' => 'structure', 'required' => ['Data', 'PartitionKey'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'Data' => ['shape' => 'Data'], 'PartitionKey' => ['shape' => 'PartitionKey'], 'ExplicitHashKey' => ['shape' => 'HashKey'], 'SequenceNumberForOrdering' => ['shape' => 'SequenceNumber'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'PutRecordOutput' => ['type' => 'structure', 'required' => ['ShardId', 'SequenceNumber'], 'members' => ['ShardId' => ['shape' => 'ShardId'], 'SequenceNumber' => ['shape' => 'SequenceNumber'], 'EncryptionType' => ['shape' => 'EncryptionType']]], 'PutRecordsInput' => ['type' => 'structure', 'required' => ['Records'], 'members' => ['Records' => ['shape' => 'PutRecordsRequestEntryList'], 'StreamName' => ['shape' => 'StreamName'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'PutRecordsOutput' => ['type' => 'structure', 'required' => ['Records'], 'members' => ['FailedRecordCount' => ['shape' => 'PositiveIntegerObject'], 'Records' => ['shape' => 'PutRecordsResultEntryList'], 'EncryptionType' => ['shape' => 'EncryptionType']]], 'PutRecordsRequestEntry' => ['type' => 'structure', 'required' => ['Data', 'PartitionKey'], 'members' => ['Data' => ['shape' => 'Data'], 'ExplicitHashKey' => ['shape' => 'HashKey'], 'PartitionKey' => ['shape' => 'PartitionKey']]], 'PutRecordsRequestEntryList' => ['type' => 'list', 'member' => ['shape' => 'PutRecordsRequestEntry'], 'max' => 500, 'min' => 1], 'PutRecordsResultEntry' => ['type' => 'structure', 'members' => ['SequenceNumber' => ['shape' => 'SequenceNumber'], 'ShardId' => ['shape' => 'ShardId'], 'ErrorCode' => ['shape' => 'ErrorCode'], 'ErrorMessage' => ['shape' => 'ErrorMessage']]], 'PutRecordsResultEntryList' => ['type' => 'list', 'member' => ['shape' => 'PutRecordsResultEntry'], 'max' => 500, 'min' => 1], 'Record' => ['type' => 'structure', 'required' => ['SequenceNumber', 'Data', 'PartitionKey'], 'members' => ['SequenceNumber' => ['shape' => 'SequenceNumber'], 'ApproximateArrivalTimestamp' => ['shape' => 'Timestamp'], 'Data' => ['shape' => 'Data'], 'PartitionKey' => ['shape' => 'PartitionKey'], 'EncryptionType' => ['shape' => 'EncryptionType']]], 'RecordList' => ['type' => 'list', 'member' => ['shape' => 'Record']], 'RegisterStreamConsumerInput' => ['type' => 'structure', 'required' => ['StreamARN', 'ConsumerName'], 'members' => ['StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']], 'ConsumerName' => ['shape' => 'ConsumerName']]], 'RegisterStreamConsumerOutput' => ['type' => 'structure', 'required' => ['Consumer'], 'members' => ['Consumer' => ['shape' => 'Consumer']]], 'RemoveTagsFromStreamInput' => ['type' => 'structure', 'required' => ['TagKeys'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'TagKeys' => ['shape' => 'TagKeyList'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'ResourceInUseException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'RetentionPeriodHours' => ['type' => 'integer'], 'ScalingType' => ['type' => 'string', 'enum' => ['UNIFORM_SCALING']], 'SequenceNumber' => ['type' => 'string', 'pattern' => '0|([1-9]\\d{0,128})'], 'SequenceNumberRange' => ['type' => 'structure', 'required' => ['StartingSequenceNumber'], 'members' => ['StartingSequenceNumber' => ['shape' => 'SequenceNumber'], 'EndingSequenceNumber' => ['shape' => 'SequenceNumber']]], 'Shard' => ['type' => 'structure', 'required' => ['ShardId', 'HashKeyRange', 'SequenceNumberRange'], 'members' => ['ShardId' => ['shape' => 'ShardId'], 'ParentShardId' => ['shape' => 'ShardId'], 'AdjacentParentShardId' => ['shape' => 'ShardId'], 'HashKeyRange' => ['shape' => 'HashKeyRange'], 'SequenceNumberRange' => ['shape' => 'SequenceNumberRange']]], 'ShardCountObject' => ['type' => 'integer', 'max' => 1000000, 'min' => 0], 'ShardFilter' => ['type' => 'structure', 'required' => ['Type'], 'members' => ['Type' => ['shape' => 'ShardFilterType'], 'ShardId' => ['shape' => 'ShardId'], 'Timestamp' => ['shape' => 'Timestamp']]], 'ShardFilterType' => ['type' => 'string', 'enum' => ['AFTER_SHARD_ID', 'AT_TRIM_HORIZON', 'FROM_TRIM_HORIZON', 'AT_LATEST', 'AT_TIMESTAMP', 'FROM_TIMESTAMP']], 'ShardId' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+'], 'ShardIdList' => ['type' => 'list', 'member' => ['shape' => 'ShardId']], 'ShardIterator' => ['type' => 'string', 'max' => 512, 'min' => 1], 'ShardIteratorType' => ['type' => 'string', 'enum' => ['AT_SEQUENCE_NUMBER', 'AFTER_SEQUENCE_NUMBER', 'TRIM_HORIZON', 'LATEST', 'AT_TIMESTAMP']], 'ShardList' => ['type' => 'list', 'member' => ['shape' => 'Shard']], 'SplitShardInput' => ['type' => 'structure', 'required' => ['ShardToSplit', 'NewStartingHashKey'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'ShardToSplit' => ['shape' => 'ShardId'], 'NewStartingHashKey' => ['shape' => 'HashKey'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'StartStreamEncryptionInput' => ['type' => 'structure', 'required' => ['EncryptionType', 'KeyId'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'EncryptionType' => ['shape' => 'EncryptionType'], 'KeyId' => ['shape' => 'KeyId'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'StartingPosition' => ['type' => 'structure', 'required' => ['Type'], 'members' => ['Type' => ['shape' => 'ShardIteratorType'], 'SequenceNumber' => ['shape' => 'SequenceNumber'], 'Timestamp' => ['shape' => 'Timestamp']]], 'StopStreamEncryptionInput' => ['type' => 'structure', 'required' => ['EncryptionType', 'KeyId'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'EncryptionType' => ['shape' => 'EncryptionType'], 'KeyId' => ['shape' => 'KeyId'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'StreamARN' => ['type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => 'arn:aws.*:kinesis:.*:\\d{12}:stream/\\S+'], 'StreamDescription' => ['type' => 'structure', 'required' => ['StreamName', 'StreamARN', 'StreamStatus', 'Shards', 'HasMoreShards', 'RetentionPeriodHours', 'StreamCreationTimestamp', 'EnhancedMonitoring'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'StreamARN' => ['shape' => 'StreamARN'], 'StreamStatus' => ['shape' => 'StreamStatus'], 'StreamModeDetails' => ['shape' => 'StreamModeDetails'], 'Shards' => ['shape' => 'ShardList'], 'HasMoreShards' => ['shape' => 'BooleanObject'], 'RetentionPeriodHours' => ['shape' => 'RetentionPeriodHours'], 'StreamCreationTimestamp' => ['shape' => 'Timestamp'], 'EnhancedMonitoring' => ['shape' => 'EnhancedMonitoringList'], 'EncryptionType' => ['shape' => 'EncryptionType'], 'KeyId' => ['shape' => 'KeyId']]], 'StreamDescriptionSummary' => ['type' => 'structure', 'required' => ['StreamName', 'StreamARN', 'StreamStatus', 'RetentionPeriodHours', 'StreamCreationTimestamp', 'EnhancedMonitoring', 'OpenShardCount'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'StreamARN' => ['shape' => 'StreamARN'], 'StreamStatus' => ['shape' => 'StreamStatus'], 'StreamModeDetails' => ['shape' => 'StreamModeDetails'], 'RetentionPeriodHours' => ['shape' => 'RetentionPeriodHours'], 'StreamCreationTimestamp' => ['shape' => 'Timestamp'], 'EnhancedMonitoring' => ['shape' => 'EnhancedMonitoringList'], 'EncryptionType' => ['shape' => 'EncryptionType'], 'KeyId' => ['shape' => 'KeyId'], 'OpenShardCount' => ['shape' => 'ShardCountObject'], 'ConsumerCount' => ['shape' => 'ConsumerCountObject']]], 'StreamMode' => ['type' => 'string', 'enum' => ['PROVISIONED', 'ON_DEMAND']], 'StreamModeDetails' => ['type' => 'structure', 'required' => ['StreamMode'], 'members' => ['StreamMode' => ['shape' => 'StreamMode']]], 'StreamName' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+'], 'StreamNameList' => ['type' => 'list', 'member' => ['shape' => 'StreamName']], 'StreamStatus' => ['type' => 'string', 'enum' => ['CREATING', 'DELETING', 'ACTIVE', 'UPDATING']], 'StreamSummary' => ['type' => 'structure', 'required' => ['StreamName', 'StreamARN', 'StreamStatus'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'StreamARN' => ['shape' => 'StreamARN'], 'StreamStatus' => ['shape' => 'StreamStatus'], 'StreamModeDetails' => ['shape' => 'StreamModeDetails'], 'StreamCreationTimestamp' => ['shape' => 'Timestamp']]], 'StreamSummaryList' => ['type' => 'list', 'member' => ['shape' => 'StreamSummary']], 'SubscribeToShardEvent' => ['type' => 'structure', 'required' => ['Records', 'ContinuationSequenceNumber', 'MillisBehindLatest'], 'members' => ['Records' => ['shape' => 'RecordList'], 'ContinuationSequenceNumber' => ['shape' => 'SequenceNumber'], 'MillisBehindLatest' => ['shape' => 'MillisBehindLatest'], 'ChildShards' => ['shape' => 'ChildShardList']], 'event' => \true], 'SubscribeToShardEventStream' => ['type' => 'structure', 'required' => ['SubscribeToShardEvent'], 'members' => ['SubscribeToShardEvent' => ['shape' => 'SubscribeToShardEvent'], 'ResourceNotFoundException' => ['shape' => 'ResourceNotFoundException'], 'ResourceInUseException' => ['shape' => 'ResourceInUseException'], 'KMSDisabledException' => ['shape' => 'KMSDisabledException'], 'KMSInvalidStateException' => ['shape' => 'KMSInvalidStateException'], 'KMSAccessDeniedException' => ['shape' => 'KMSAccessDeniedException'], 'KMSNotFoundException' => ['shape' => 'KMSNotFoundException'], 'KMSOptInRequired' => ['shape' => 'KMSOptInRequired'], 'KMSThrottlingException' => ['shape' => 'KMSThrottlingException'], 'InternalFailureException' => ['shape' => 'InternalFailureException']], 'eventstream' => \true], 'SubscribeToShardInput' => ['type' => 'structure', 'required' => ['ConsumerARN', 'ShardId', 'StartingPosition'], 'members' => ['ConsumerARN' => ['shape' => 'ConsumerARN', 'contextParam' => ['name' => 'ConsumerARN']], 'ShardId' => ['shape' => 'ShardId'], 'StartingPosition' => ['shape' => 'StartingPosition']]], 'SubscribeToShardOutput' => ['type' => 'structure', 'required' => ['EventStream'], 'members' => ['EventStream' => ['shape' => 'SubscribeToShardEventStream']]], 'Tag' => ['type' => 'structure', 'required' => ['Key'], 'members' => ['Key' => ['shape' => 'TagKey'], 'Value' => ['shape' => 'TagValue']]], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1], 'TagKeyList' => ['type' => 'list', 'member' => ['shape' => 'TagKey'], 'max' => 50, 'min' => 1], 'TagList' => ['type' => 'list', 'member' => ['shape' => 'Tag'], 'max' => 200, 'min' => 0], 'TagMap' => ['type' => 'map', 'key' => ['shape' => 'TagKey'], 'value' => ['shape' => 'TagValue'], 'max' => 200, 'min' => 1], 'TagValue' => ['type' => 'string', 'max' => 256, 'min' => 0], 'Timestamp' => ['type' => 'timestamp'], 'UpdateShardCountInput' => ['type' => 'structure', 'required' => ['TargetShardCount', 'ScalingType'], 'members' => ['StreamName' => ['shape' => 'StreamName'], 'TargetShardCount' => ['shape' => 'PositiveIntegerObject'], 'ScalingType' => ['shape' => 'ScalingType'], 'StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']]]], 'UpdateShardCountOutput' => ['type' => 'structure', 'members' => ['StreamName' => ['shape' => 'StreamName'], 'CurrentShardCount' => ['shape' => 'PositiveIntegerObject'], 'TargetShardCount' => ['shape' => 'PositiveIntegerObject'], 'StreamARN' => ['shape' => 'StreamARN']]], 'UpdateStreamModeInput' => ['type' => 'structure', 'required' => ['StreamARN', 'StreamModeDetails'], 'members' => ['StreamARN' => ['shape' => 'StreamARN', 'contextParam' => ['name' => 'StreamARN']], 'StreamModeDetails' => ['shape' => 'StreamModeDetails']]], 'ValidationException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => \true]]];

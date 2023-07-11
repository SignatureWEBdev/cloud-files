<?php

namespace ExpressionEngine\Dependency\Aws\Emr;

use ExpressionEngine\Dependency\Aws\AwsClient;
/**
 * This client is used to interact with the **Amazon Elastic MapReduce (Amazon EMR)** service.
 *
 * @method \Aws\Result addInstanceFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addInstanceFleetAsync(array $args = [])
 * @method \Aws\Result addInstanceGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addInstanceGroupsAsync(array $args = [])
 * @method \Aws\Result addJobFlowSteps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addJobFlowStepsAsync(array $args = [])
 * @method \Aws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \Aws\Result cancelSteps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelStepsAsync(array $args = [])
 * @method \Aws\Result createSecurityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecurityConfigurationAsync(array $args = [])
 * @method \Aws\Result createStudio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStudioAsync(array $args = [])
 * @method \Aws\Result createStudioSessionMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStudioSessionMappingAsync(array $args = [])
 * @method \Aws\Result deleteSecurityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecurityConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteStudio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStudioAsync(array $args = [])
 * @method \Aws\Result deleteStudioSessionMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStudioSessionMappingAsync(array $args = [])
 * @method \Aws\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \Aws\Result describeJobFlows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobFlowsAsync(array $args = [])
 * @method \Aws\Result describeNotebookExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotebookExecutionAsync(array $args = [])
 * @method \Aws\Result describeReleaseLabel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReleaseLabelAsync(array $args = [])
 * @method \Aws\Result describeSecurityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecurityConfigurationAsync(array $args = [])
 * @method \Aws\Result describeStep(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStepAsync(array $args = [])
 * @method \Aws\Result describeStudio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStudioAsync(array $args = [])
 * @method \Aws\Result getAutoTerminationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAutoTerminationPolicyAsync(array $args = [])
 * @method \Aws\Result getBlockPublicAccessConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlockPublicAccessConfigurationAsync(array $args = [])
 * @method \Aws\Result getClusterSessionCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClusterSessionCredentialsAsync(array $args = [])
 * @method \Aws\Result getManagedScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getManagedScalingPolicyAsync(array $args = [])
 * @method \Aws\Result getStudioSessionMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStudioSessionMappingAsync(array $args = [])
 * @method \Aws\Result listBootstrapActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBootstrapActionsAsync(array $args = [])
 * @method \Aws\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \Aws\Result listInstanceFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstanceFleetsAsync(array $args = [])
 * @method \Aws\Result listInstanceGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstanceGroupsAsync(array $args = [])
 * @method \Aws\Result listInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstancesAsync(array $args = [])
 * @method \Aws\Result listNotebookExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNotebookExecutionsAsync(array $args = [])
 * @method \Aws\Result listReleaseLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReleaseLabelsAsync(array $args = [])
 * @method \Aws\Result listSecurityConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecurityConfigurationsAsync(array $args = [])
 * @method \Aws\Result listSteps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStepsAsync(array $args = [])
 * @method \Aws\Result listStudioSessionMappings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStudioSessionMappingsAsync(array $args = [])
 * @method \Aws\Result listStudios(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStudiosAsync(array $args = [])
 * @method \Aws\Result listSupportedInstanceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSupportedInstanceTypesAsync(array $args = [])
 * @method \Aws\Result modifyCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterAsync(array $args = [])
 * @method \Aws\Result modifyInstanceFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceFleetAsync(array $args = [])
 * @method \Aws\Result modifyInstanceGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceGroupsAsync(array $args = [])
 * @method \Aws\Result putAutoScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAutoScalingPolicyAsync(array $args = [])
 * @method \Aws\Result putAutoTerminationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAutoTerminationPolicyAsync(array $args = [])
 * @method \Aws\Result putBlockPublicAccessConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBlockPublicAccessConfigurationAsync(array $args = [])
 * @method \Aws\Result putManagedScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putManagedScalingPolicyAsync(array $args = [])
 * @method \Aws\Result removeAutoScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAutoScalingPolicyAsync(array $args = [])
 * @method \Aws\Result removeAutoTerminationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAutoTerminationPolicyAsync(array $args = [])
 * @method \Aws\Result removeManagedScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeManagedScalingPolicyAsync(array $args = [])
 * @method \Aws\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \Aws\Result runJobFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise runJobFlowAsync(array $args = [])
 * @method \Aws\Result setTerminationProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTerminationProtectionAsync(array $args = [])
 * @method \Aws\Result setVisibleToAllUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setVisibleToAllUsersAsync(array $args = [])
 * @method \Aws\Result startNotebookExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startNotebookExecutionAsync(array $args = [])
 * @method \Aws\Result stopNotebookExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopNotebookExecutionAsync(array $args = [])
 * @method \Aws\Result terminateJobFlows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateJobFlowsAsync(array $args = [])
 * @method \Aws\Result updateStudio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStudioAsync(array $args = [])
 * @method \Aws\Result updateStudioSessionMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStudioSessionMappingAsync(array $args = [])
 */
class EmrClient extends AwsClient
{
}

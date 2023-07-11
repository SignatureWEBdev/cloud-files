<?php

namespace ExpressionEngine\Dependency\Aws\OpenSearchService;

use ExpressionEngine\Dependency\Aws\AwsClient;
/**
 * This client is used to interact with the **Amazon OpenSearch Service** service.
 * @method \Aws\Result acceptInboundConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptInboundConnectionAsync(array $args = [])
 * @method \Aws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \Aws\Result associatePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePackageAsync(array $args = [])
 * @method \Aws\Result authorizeVpcEndpointAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeVpcEndpointAccessAsync(array $args = [])
 * @method \Aws\Result cancelServiceSoftwareUpdate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelServiceSoftwareUpdateAsync(array $args = [])
 * @method \Aws\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Aws\Result createOutboundConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOutboundConnectionAsync(array $args = [])
 * @method \Aws\Result createPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPackageAsync(array $args = [])
 * @method \Aws\Result createVpcEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcEndpointAsync(array $args = [])
 * @method \Aws\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Aws\Result deleteInboundConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInboundConnectionAsync(array $args = [])
 * @method \Aws\Result deleteOutboundConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOutboundConnectionAsync(array $args = [])
 * @method \Aws\Result deletePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackageAsync(array $args = [])
 * @method \Aws\Result deleteVpcEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcEndpointAsync(array $args = [])
 * @method \Aws\Result describeDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainAsync(array $args = [])
 * @method \Aws\Result describeDomainAutoTunes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainAutoTunesAsync(array $args = [])
 * @method \Aws\Result describeDomainChangeProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainChangeProgressAsync(array $args = [])
 * @method \Aws\Result describeDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainConfigAsync(array $args = [])
 * @method \Aws\Result describeDomainHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainHealthAsync(array $args = [])
 * @method \Aws\Result describeDomainNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainNodesAsync(array $args = [])
 * @method \Aws\Result describeDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainsAsync(array $args = [])
 * @method \Aws\Result describeDryRunProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDryRunProgressAsync(array $args = [])
 * @method \Aws\Result describeInboundConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInboundConnectionsAsync(array $args = [])
 * @method \Aws\Result describeInstanceTypeLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceTypeLimitsAsync(array $args = [])
 * @method \Aws\Result describeOutboundConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOutboundConnectionsAsync(array $args = [])
 * @method \Aws\Result describePackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackagesAsync(array $args = [])
 * @method \Aws\Result describeReservedInstanceOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedInstanceOfferingsAsync(array $args = [])
 * @method \Aws\Result describeReservedInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedInstancesAsync(array $args = [])
 * @method \Aws\Result describeVpcEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcEndpointsAsync(array $args = [])
 * @method \Aws\Result dissociatePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise dissociatePackageAsync(array $args = [])
 * @method \Aws\Result getCompatibleVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCompatibleVersionsAsync(array $args = [])
 * @method \Aws\Result getPackageVersionHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPackageVersionHistoryAsync(array $args = [])
 * @method \Aws\Result getUpgradeHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUpgradeHistoryAsync(array $args = [])
 * @method \Aws\Result getUpgradeStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUpgradeStatusAsync(array $args = [])
 * @method \Aws\Result listDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainNamesAsync(array $args = [])
 * @method \Aws\Result listDomainsForPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsForPackageAsync(array $args = [])
 * @method \Aws\Result listInstanceTypeDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstanceTypeDetailsAsync(array $args = [])
 * @method \Aws\Result listPackagesForDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackagesForDomainAsync(array $args = [])
 * @method \Aws\Result listScheduledActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listScheduledActionsAsync(array $args = [])
 * @method \Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws\Result listVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVersionsAsync(array $args = [])
 * @method \Aws\Result listVpcEndpointAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVpcEndpointAccessAsync(array $args = [])
 * @method \Aws\Result listVpcEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVpcEndpointsAsync(array $args = [])
 * @method \Aws\Result listVpcEndpointsForDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVpcEndpointsForDomainAsync(array $args = [])
 * @method \Aws\Result purchaseReservedInstanceOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseReservedInstanceOfferingAsync(array $args = [])
 * @method \Aws\Result rejectInboundConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectInboundConnectionAsync(array $args = [])
 * @method \Aws\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \Aws\Result revokeVpcEndpointAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeVpcEndpointAccessAsync(array $args = [])
 * @method \Aws\Result startServiceSoftwareUpdate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startServiceSoftwareUpdateAsync(array $args = [])
 * @method \Aws\Result updateDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainConfigAsync(array $args = [])
 * @method \Aws\Result updatePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePackageAsync(array $args = [])
 * @method \Aws\Result updateScheduledAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScheduledActionAsync(array $args = [])
 * @method \Aws\Result updateVpcEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVpcEndpointAsync(array $args = [])
 * @method \Aws\Result upgradeDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise upgradeDomainAsync(array $args = [])
 */
class OpenSearchServiceClient extends AwsClient
{
}

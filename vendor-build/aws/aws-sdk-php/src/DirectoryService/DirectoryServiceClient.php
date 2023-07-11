<?php

namespace ExpressionEngine\Dependency\Aws\DirectoryService;

use ExpressionEngine\Dependency\Aws\AwsClient;
/**
 * AWS Directory Service client
 *
 * @method \Aws\Result acceptSharedDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptSharedDirectoryAsync(array $args = [])
 * @method \Aws\Result addIpRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addIpRoutesAsync(array $args = [])
 * @method \Aws\Result addRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addRegionAsync(array $args = [])
 * @method \Aws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Aws\Result cancelSchemaExtension(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSchemaExtensionAsync(array $args = [])
 * @method \Aws\Result connectDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise connectDirectoryAsync(array $args = [])
 * @method \Aws\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \Aws\Result createComputer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComputerAsync(array $args = [])
 * @method \Aws\Result createConditionalForwarder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConditionalForwarderAsync(array $args = [])
 * @method \Aws\Result createDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectoryAsync(array $args = [])
 * @method \Aws\Result createLogSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogSubscriptionAsync(array $args = [])
 * @method \Aws\Result createMicrosoftAD(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMicrosoftADAsync(array $args = [])
 * @method \Aws\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Aws\Result createTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrustAsync(array $args = [])
 * @method \Aws\Result deleteConditionalForwarder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConditionalForwarderAsync(array $args = [])
 * @method \Aws\Result deleteDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectoryAsync(array $args = [])
 * @method \Aws\Result deleteLogSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogSubscriptionAsync(array $args = [])
 * @method \Aws\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrustAsync(array $args = [])
 * @method \Aws\Result deregisterCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterCertificateAsync(array $args = [])
 * @method \Aws\Result deregisterEventTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterEventTopicAsync(array $args = [])
 * @method \Aws\Result describeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \Aws\Result describeClientAuthenticationSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClientAuthenticationSettingsAsync(array $args = [])
 * @method \Aws\Result describeConditionalForwarders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConditionalForwardersAsync(array $args = [])
 * @method \Aws\Result describeDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectoriesAsync(array $args = [])
 * @method \Aws\Result describeDomainControllers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainControllersAsync(array $args = [])
 * @method \Aws\Result describeEventTopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventTopicsAsync(array $args = [])
 * @method \Aws\Result describeLDAPSSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLDAPSSettingsAsync(array $args = [])
 * @method \Aws\Result describeRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegionsAsync(array $args = [])
 * @method \Aws\Result describeSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSettingsAsync(array $args = [])
 * @method \Aws\Result describeSharedDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSharedDirectoriesAsync(array $args = [])
 * @method \Aws\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \Aws\Result describeTrusts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustsAsync(array $args = [])
 * @method \Aws\Result describeUpdateDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUpdateDirectoryAsync(array $args = [])
 * @method \Aws\Result disableClientAuthentication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableClientAuthenticationAsync(array $args = [])
 * @method \Aws\Result disableLDAPS(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableLDAPSAsync(array $args = [])
 * @method \Aws\Result disableRadius(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableRadiusAsync(array $args = [])
 * @method \Aws\Result disableSso(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSsoAsync(array $args = [])
 * @method \Aws\Result enableClientAuthentication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableClientAuthenticationAsync(array $args = [])
 * @method \Aws\Result enableLDAPS(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableLDAPSAsync(array $args = [])
 * @method \Aws\Result enableRadius(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRadiusAsync(array $args = [])
 * @method \Aws\Result enableSso(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSsoAsync(array $args = [])
 * @method \Aws\Result getDirectoryLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDirectoryLimitsAsync(array $args = [])
 * @method \Aws\Result getSnapshotLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnapshotLimitsAsync(array $args = [])
 * @method \Aws\Result listCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \Aws\Result listIpRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIpRoutesAsync(array $args = [])
 * @method \Aws\Result listLogSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLogSubscriptionsAsync(array $args = [])
 * @method \Aws\Result listSchemaExtensions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemaExtensionsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result registerCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerCertificateAsync(array $args = [])
 * @method \Aws\Result registerEventTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerEventTopicAsync(array $args = [])
 * @method \Aws\Result rejectSharedDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectSharedDirectoryAsync(array $args = [])
 * @method \Aws\Result removeIpRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeIpRoutesAsync(array $args = [])
 * @method \Aws\Result removeRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeRegionAsync(array $args = [])
 * @method \Aws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \Aws\Result resetUserPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetUserPasswordAsync(array $args = [])
 * @method \Aws\Result restoreFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreFromSnapshotAsync(array $args = [])
 * @method \Aws\Result shareDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise shareDirectoryAsync(array $args = [])
 * @method \Aws\Result startSchemaExtension(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSchemaExtensionAsync(array $args = [])
 * @method \Aws\Result unshareDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unshareDirectoryAsync(array $args = [])
 * @method \Aws\Result updateConditionalForwarder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConditionalForwarderAsync(array $args = [])
 * @method \Aws\Result updateDirectorySetup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDirectorySetupAsync(array $args = [])
 * @method \Aws\Result updateNumberOfDomainControllers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNumberOfDomainControllersAsync(array $args = [])
 * @method \Aws\Result updateRadius(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRadiusAsync(array $args = [])
 * @method \Aws\Result updateSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSettingsAsync(array $args = [])
 * @method \Aws\Result updateTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrustAsync(array $args = [])
 * @method \Aws\Result verifyTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyTrustAsync(array $args = [])
 */
class DirectoryServiceClient extends AwsClient
{
}

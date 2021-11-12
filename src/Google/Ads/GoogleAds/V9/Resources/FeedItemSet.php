<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/feed_item_set.proto

namespace Google\Ads\GoogleAds\V9\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a set of feed items. The set can be used and shared among certain
 * feed item features. For instance, the set can be referenced within the
 * matching functions of CustomerFeed, CampaignFeed, and AdGroupFeed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.resources.FeedItemSet</code>
 */
class FeedItemSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the feed item set.
     * Feed item set resource names have the form:
     * `customers/{customer_id}/feedItemSets/{feed_id}~{feed_item_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The resource name of the feed containing the feed items in the set.
     * Immutable. Required.
     *
     * Generated from protobuf field <code>string feed = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $feed = '';
    /**
     * Output only. ID of the set.
     *
     * Generated from protobuf field <code>int64 feed_item_set_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $feed_item_set_id = 0;
    /**
     * Name of the set. Must be unique within the account.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     */
    protected $display_name = '';
    /**
     * Output only. Status of the feed item set.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.FeedItemSetStatusEnum.FeedItemSetStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    protected $dynamic_set_filter;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the feed item set.
     *           Feed item set resource names have the form:
     *           `customers/{customer_id}/feedItemSets/{feed_id}~{feed_item_set_id}`
     *     @type string $feed
     *           Immutable. The resource name of the feed containing the feed items in the set.
     *           Immutable. Required.
     *     @type int|string $feed_item_set_id
     *           Output only. ID of the set.
     *     @type string $display_name
     *           Name of the set. Must be unique within the account.
     *     @type int $status
     *           Output only. Status of the feed item set.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V9\Common\DynamicLocationSetFilter $dynamic_location_set_filter
     *           Filter for dynamic location set.
     *           It is only used for sets of locations.
     *     @type \Google\Ads\GoogleAds\V9\Common\DynamicAffiliateLocationSetFilter $dynamic_affiliate_location_set_filter
     *           Filter for dynamic affiliate location set.
     *           This field doesn't apply generally to feed item sets. It is only used for
     *           sets of affiliate locations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Resources\FeedItemSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the feed item set.
     * Feed item set resource names have the form:
     * `customers/{customer_id}/feedItemSets/{feed_id}~{feed_item_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the feed item set.
     * Feed item set resource names have the form:
     * `customers/{customer_id}/feedItemSets/{feed_id}~{feed_item_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Immutable. The resource name of the feed containing the feed items in the set.
     * Immutable. Required.
     *
     * Generated from protobuf field <code>string feed = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * Immutable. The resource name of the feed containing the feed items in the set.
     * Immutable. Required.
     *
     * Generated from protobuf field <code>string feed = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkString($var, True);
        $this->feed = $var;

        return $this;
    }

    /**
     * Output only. ID of the set.
     *
     * Generated from protobuf field <code>int64 feed_item_set_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getFeedItemSetId()
    {
        return $this->feed_item_set_id;
    }

    /**
     * Output only. ID of the set.
     *
     * Generated from protobuf field <code>int64 feed_item_set_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeedItemSetId($var)
    {
        GPBUtil::checkInt64($var);
        $this->feed_item_set_id = $var;

        return $this;
    }

    /**
     * Name of the set. Must be unique within the account.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Name of the set. Must be unique within the account.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Status of the feed item set.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.FeedItemSetStatusEnum.FeedItemSetStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the feed item set.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.FeedItemSetStatusEnum.FeedItemSetStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\FeedItemSetStatusEnum\FeedItemSetStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Filter for dynamic location set.
     * It is only used for sets of locations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.DynamicLocationSetFilter dynamic_location_set_filter = 5;</code>
     * @return \Google\Ads\GoogleAds\V9\Common\DynamicLocationSetFilter|null
     */
    public function getDynamicLocationSetFilter()
    {
        return $this->readOneof(5);
    }

    public function hasDynamicLocationSetFilter()
    {
        return $this->hasOneof(5);
    }

    /**
     * Filter for dynamic location set.
     * It is only used for sets of locations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.DynamicLocationSetFilter dynamic_location_set_filter = 5;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\DynamicLocationSetFilter $var
     * @return $this
     */
    public function setDynamicLocationSetFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Common\DynamicLocationSetFilter::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Filter for dynamic affiliate location set.
     * This field doesn't apply generally to feed item sets. It is only used for
     * sets of affiliate locations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.DynamicAffiliateLocationSetFilter dynamic_affiliate_location_set_filter = 6;</code>
     * @return \Google\Ads\GoogleAds\V9\Common\DynamicAffiliateLocationSetFilter|null
     */
    public function getDynamicAffiliateLocationSetFilter()
    {
        return $this->readOneof(6);
    }

    public function hasDynamicAffiliateLocationSetFilter()
    {
        return $this->hasOneof(6);
    }

    /**
     * Filter for dynamic affiliate location set.
     * This field doesn't apply generally to feed item sets. It is only used for
     * sets of affiliate locations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.DynamicAffiliateLocationSetFilter dynamic_affiliate_location_set_filter = 6;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\DynamicAffiliateLocationSetFilter $var
     * @return $this
     */
    public function setDynamicAffiliateLocationSetFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Common\DynamicAffiliateLocationSetFilter::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDynamicSetFilter()
    {
        return $this->whichOneof("dynamic_set_filter");
    }

}


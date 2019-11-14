<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes how to combine multiple time series to provide different views of
 * the data.  Aggregation consists of an alignment step on individual time
 * series (`alignment_period` and `per_series_aligner`) followed by an optional
 * reduction step of the data across the aligned time series
 * (`cross_series_reducer` and `group_by_fields`).  For more details, see
 * [Aggregation](https://cloud.google.com/monitoring/api/learn_more#aggregation).
 *
 * Generated from protobuf message <code>google.monitoring.v3.Aggregation</code>
 */
class Aggregation extends \Google\Protobuf\Internal\Message
{
    /**
     * The alignment period for per-[time series][google.monitoring.v3.TimeSeries]
     * alignment. If present, `alignmentPeriod` must be at least 60
     * seconds.  After per-time series alignment, each time series will
     * contain data points only on the period boundaries. If
     * `perSeriesAligner` is not specified or equals `ALIGN_NONE`, then
     * this field is ignored. If `perSeriesAligner` is specified and
     * does not equal `ALIGN_NONE`, then this field must be defined;
     * otherwise an error is returned.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration alignment_period = 1;</code>
     */
    private $alignment_period = null;
    /**
     * The approach to be used to align individual time series. Not all
     * alignment functions may be applied to all time series, depending
     * on the metric type and value type of the original time
     * series. Alignment may change the metric type or the value type of
     * the time series.
     * Time series data must be aligned in order to perform cross-time
     * series reduction. If `crossSeriesReducer` is specified, then
     * `perSeriesAligner` must be specified and not equal `ALIGN_NONE`
     * and `alignmentPeriod` must be specified; otherwise, an error is
     * returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation.Aligner per_series_aligner = 2;</code>
     */
    private $per_series_aligner = 0;
    /**
     * The approach to be used to combine time series. Not all reducer
     * functions may be applied to all time series, depending on the
     * metric type and the value type of the original time
     * series. Reduction may change the metric type of value type of the
     * time series.
     * Time series data must be aligned in order to perform cross-time
     * series reduction. If `crossSeriesReducer` is specified, then
     * `perSeriesAligner` must be specified and not equal `ALIGN_NONE`
     * and `alignmentPeriod` must be specified; otherwise, an error is
     * returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation.Reducer cross_series_reducer = 4;</code>
     */
    private $cross_series_reducer = 0;
    /**
     * The set of fields to preserve when `crossSeriesReducer` is
     * specified. The `groupByFields` determine how the time series are
     * partitioned into subsets prior to applying the aggregation
     * function. Each subset contains time series that have the same
     * value for each of the grouping fields. Each individual time
     * series is a member of exactly one subset. The
     * `crossSeriesReducer` is applied to each subset of time series.
     * It is not possible to reduce across different resource types, so
     * this field implicitly contains `resource.type`.  Fields not
     * specified in `groupByFields` are aggregated away.  If
     * `groupByFields` is not specified and all the time series have
     * the same resource type, then the time series are aggregated into
     * a single output time series. If `crossSeriesReducer` is not
     * defined, this field is ignored.
     *
     * Generated from protobuf field <code>repeated string group_by_fields = 5;</code>
     */
    private $group_by_fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $alignment_period
     *           The alignment period for per-[time series][google.monitoring.v3.TimeSeries]
     *           alignment. If present, `alignmentPeriod` must be at least 60
     *           seconds.  After per-time series alignment, each time series will
     *           contain data points only on the period boundaries. If
     *           `perSeriesAligner` is not specified or equals `ALIGN_NONE`, then
     *           this field is ignored. If `perSeriesAligner` is specified and
     *           does not equal `ALIGN_NONE`, then this field must be defined;
     *           otherwise an error is returned.
     *     @type int $per_series_aligner
     *           The approach to be used to align individual time series. Not all
     *           alignment functions may be applied to all time series, depending
     *           on the metric type and value type of the original time
     *           series. Alignment may change the metric type or the value type of
     *           the time series.
     *           Time series data must be aligned in order to perform cross-time
     *           series reduction. If `crossSeriesReducer` is specified, then
     *           `perSeriesAligner` must be specified and not equal `ALIGN_NONE`
     *           and `alignmentPeriod` must be specified; otherwise, an error is
     *           returned.
     *     @type int $cross_series_reducer
     *           The approach to be used to combine time series. Not all reducer
     *           functions may be applied to all time series, depending on the
     *           metric type and the value type of the original time
     *           series. Reduction may change the metric type of value type of the
     *           time series.
     *           Time series data must be aligned in order to perform cross-time
     *           series reduction. If `crossSeriesReducer` is specified, then
     *           `perSeriesAligner` must be specified and not equal `ALIGN_NONE`
     *           and `alignmentPeriod` must be specified; otherwise, an error is
     *           returned.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $group_by_fields
     *           The set of fields to preserve when `crossSeriesReducer` is
     *           specified. The `groupByFields` determine how the time series are
     *           partitioned into subsets prior to applying the aggregation
     *           function. Each subset contains time series that have the same
     *           value for each of the grouping fields. Each individual time
     *           series is a member of exactly one subset. The
     *           `crossSeriesReducer` is applied to each subset of time series.
     *           It is not possible to reduce across different resource types, so
     *           this field implicitly contains `resource.type`.  Fields not
     *           specified in `groupByFields` are aggregated away.  If
     *           `groupByFields` is not specified and all the time series have
     *           the same resource type, then the time series are aggregated into
     *           a single output time series. If `crossSeriesReducer` is not
     *           defined, this field is ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The alignment period for per-[time series][google.monitoring.v3.TimeSeries]
     * alignment. If present, `alignmentPeriod` must be at least 60
     * seconds.  After per-time series alignment, each time series will
     * contain data points only on the period boundaries. If
     * `perSeriesAligner` is not specified or equals `ALIGN_NONE`, then
     * this field is ignored. If `perSeriesAligner` is specified and
     * does not equal `ALIGN_NONE`, then this field must be defined;
     * otherwise an error is returned.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration alignment_period = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getAlignmentPeriod()
    {
        return $this->alignment_period;
    }

    /**
     * The alignment period for per-[time series][google.monitoring.v3.TimeSeries]
     * alignment. If present, `alignmentPeriod` must be at least 60
     * seconds.  After per-time series alignment, each time series will
     * contain data points only on the period boundaries. If
     * `perSeriesAligner` is not specified or equals `ALIGN_NONE`, then
     * this field is ignored. If `perSeriesAligner` is specified and
     * does not equal `ALIGN_NONE`, then this field must be defined;
     * otherwise an error is returned.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration alignment_period = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setAlignmentPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->alignment_period = $var;

        return $this;
    }

    /**
     * The approach to be used to align individual time series. Not all
     * alignment functions may be applied to all time series, depending
     * on the metric type and value type of the original time
     * series. Alignment may change the metric type or the value type of
     * the time series.
     * Time series data must be aligned in order to perform cross-time
     * series reduction. If `crossSeriesReducer` is specified, then
     * `perSeriesAligner` must be specified and not equal `ALIGN_NONE`
     * and `alignmentPeriod` must be specified; otherwise, an error is
     * returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation.Aligner per_series_aligner = 2;</code>
     * @return int
     */
    public function getPerSeriesAligner()
    {
        return $this->per_series_aligner;
    }

    /**
     * The approach to be used to align individual time series. Not all
     * alignment functions may be applied to all time series, depending
     * on the metric type and value type of the original time
     * series. Alignment may change the metric type or the value type of
     * the time series.
     * Time series data must be aligned in order to perform cross-time
     * series reduction. If `crossSeriesReducer` is specified, then
     * `perSeriesAligner` must be specified and not equal `ALIGN_NONE`
     * and `alignmentPeriod` must be specified; otherwise, an error is
     * returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation.Aligner per_series_aligner = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPerSeriesAligner($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\Aggregation_Aligner::class);
        $this->per_series_aligner = $var;

        return $this;
    }

    /**
     * The approach to be used to combine time series. Not all reducer
     * functions may be applied to all time series, depending on the
     * metric type and the value type of the original time
     * series. Reduction may change the metric type of value type of the
     * time series.
     * Time series data must be aligned in order to perform cross-time
     * series reduction. If `crossSeriesReducer` is specified, then
     * `perSeriesAligner` must be specified and not equal `ALIGN_NONE`
     * and `alignmentPeriod` must be specified; otherwise, an error is
     * returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation.Reducer cross_series_reducer = 4;</code>
     * @return int
     */
    public function getCrossSeriesReducer()
    {
        return $this->cross_series_reducer;
    }

    /**
     * The approach to be used to combine time series. Not all reducer
     * functions may be applied to all time series, depending on the
     * metric type and the value type of the original time
     * series. Reduction may change the metric type of value type of the
     * time series.
     * Time series data must be aligned in order to perform cross-time
     * series reduction. If `crossSeriesReducer` is specified, then
     * `perSeriesAligner` must be specified and not equal `ALIGN_NONE`
     * and `alignmentPeriod` must be specified; otherwise, an error is
     * returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation.Reducer cross_series_reducer = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCrossSeriesReducer($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\Aggregation_Reducer::class);
        $this->cross_series_reducer = $var;

        return $this;
    }

    /**
     * The set of fields to preserve when `crossSeriesReducer` is
     * specified. The `groupByFields` determine how the time series are
     * partitioned into subsets prior to applying the aggregation
     * function. Each subset contains time series that have the same
     * value for each of the grouping fields. Each individual time
     * series is a member of exactly one subset. The
     * `crossSeriesReducer` is applied to each subset of time series.
     * It is not possible to reduce across different resource types, so
     * this field implicitly contains `resource.type`.  Fields not
     * specified in `groupByFields` are aggregated away.  If
     * `groupByFields` is not specified and all the time series have
     * the same resource type, then the time series are aggregated into
     * a single output time series. If `crossSeriesReducer` is not
     * defined, this field is ignored.
     *
     * Generated from protobuf field <code>repeated string group_by_fields = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupByFields()
    {
        return $this->group_by_fields;
    }

    /**
     * The set of fields to preserve when `crossSeriesReducer` is
     * specified. The `groupByFields` determine how the time series are
     * partitioned into subsets prior to applying the aggregation
     * function. Each subset contains time series that have the same
     * value for each of the grouping fields. Each individual time
     * series is a member of exactly one subset. The
     * `crossSeriesReducer` is applied to each subset of time series.
     * It is not possible to reduce across different resource types, so
     * this field implicitly contains `resource.type`.  Fields not
     * specified in `groupByFields` are aggregated away.  If
     * `groupByFields` is not specified and all the time series have
     * the same resource type, then the time series are aggregated into
     * a single output time series. If `crossSeriesReducer` is not
     * defined, this field is ignored.
     *
     * Generated from protobuf field <code>repeated string group_by_fields = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupByFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->group_by_fields = $arr;

        return $this;
    }

}


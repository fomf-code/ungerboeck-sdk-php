# MoveOrderModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_code** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Always Required  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORG_CODE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 2&lt;/span&gt;&lt;/div&gt; | 
**order_number** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Always Required  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_NBR  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10&lt;/span&gt;&lt;/div&gt; | 
**destination_event_id** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Always Required  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_EVT_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10&lt;/span&gt;&lt;/div&gt; | 
**function** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Move the order to a different function by filling the Function ID into this integer property.  This is not used on Registration Orders (unless they are v19 style registration orders).  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_FUNC_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**keep_date_times** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; If you wish to keep the original order dates with the order, use \&quot;Y\&quot; for yes, \&quot;N\&quot; for no.  If \&quot;N\&quot;, the moved order will adapt to the function start/end date.  This is not used on Registration Orders (unless they are v19 style registration orders).  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; None  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


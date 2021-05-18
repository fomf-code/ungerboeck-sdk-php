# RegistrationPreferenceTypesModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**registration_preference_id** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Indentifier - Use for GET and PUT URLs  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; GDPR_CONSENT_REG_ID &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**org_code** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ORG_CODE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 2  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**preference_type** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; GDPR_CONSENT_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**active** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ACTIVE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**mandatory** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; MANDATORY  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**entered_on** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ENTERED_STAMP  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**entered_by** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ENTERED_USER  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**changed_on** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; UPDATED_STAMP  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**changed_by** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; UPDATED_USER  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**configuration_code** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; CONFIG_CODE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 12  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


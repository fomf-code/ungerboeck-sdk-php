# PreferenceSettingsModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Identifier field.  Use this in the URLs for GET, DELETE and PUT.  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; MM612_ORG_CODE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 2  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**id** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Identifier field.  Use this in the URLs for GET, DELETE and PUT.  You do not need to set this on POST, as it is automatically generated within Ungerboeck.  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; MM612_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**contact** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; When doing a POST, use this field to attach the preference setting to an account.  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; MM612_ACCT_CODE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**consent_settings_id** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; This is based on the MM611 table and is just for informational purposes.  The system auto generates the value.  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**preference_type** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; When doing a POST, fill this field with the corresponding preference type ID.  This is found on the Preference Type window (Or on the table as MM610_ID)  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_CONSENT_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**consent_given** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Enter 0 for consent not given, enter 1 for consent given.  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_CONSENT_GIVEN  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**entered_on** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ENT_STAMP  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**entered_by** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ENT_USER_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**changed_on** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_UPD_STAMP  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**changed_by** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_UPD_USER_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**description** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_DESC  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 255  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_description1** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_DESC  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 255  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_description2** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_DESC_2  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 255  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_description3** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_DESC_3  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 255  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_description4** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_DESC_4  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 255  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_description5** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_DESC_5  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 255  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**summary** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_SUMMARY  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1000  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**application** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_APPL_USED  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_summary1** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_SUMMARY_1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1000  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_summary2** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_SUMMARY_2  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1000  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_summary3** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_SUMMARY_3  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1000  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_summary4** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_SUMMARY_4  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1000  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**alternate_summary5** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_ALT_SUMMARY_5  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1000  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**instructions** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ConsentSettings_MM611_INSTRUCTIONS  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1000  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


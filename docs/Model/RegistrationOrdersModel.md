# RegistrationOrdersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_code** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Indentifier - Use for GET and PUT URLs  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORG_CODE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 2  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**order_number** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Indentifier - Use for GET and PUT URLs  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_NBR  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**search_order** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_SO_SEARCH  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 9  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**event** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_EVT_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**order_date** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_DATE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**order_status** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_NEW_STS  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 2  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**account** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_ACCT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**bill_to_account** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_BILL_TO_CUST  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**status_class** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_STS  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**printed** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_PRT_STS  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**po_number** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_PO_NBR  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 150  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**price_list** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Required for adding an order  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_PRICE_LIST  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**phase** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_RES_PHASE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**ordered_total** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_TOT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**ordered_tax** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_TAX  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**net_due** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_DUE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**actual_total** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ACT_TOTAL  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**actual_tax** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ACT_TAX  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**actual_net_due** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ACT_DUE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**payments** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ACT_PAYMENTS  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**internal** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_INTERNAL  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**entered_date_time** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Automatically set by API  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ENT_DATE_ISO  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**entered_by_user_id** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Automatically set by API  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ENT_USER_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**last_changed_date_time** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Automatically set by API  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_UPD_DATE_ISO  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**last_changed_by_user_id** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Automatically set by API  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_UPD_USER_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**shipping_method** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_SHIP_METHOD  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 3  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**department** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_USER_6X  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 6  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**requester_account** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_REQ_CUST  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**invoice_number** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_INVOICE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**currency** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_CURRENCY  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 3  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**fc_ordered_total** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_FC_ORD_TOT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**fc_ordered_tax** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_FC_ORD_TAX  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**fc_net_due** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_FC_ORD_DUE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**fc_actual_total** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_FC_ACT_TOT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**fc_actual_due** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_FC_ACT_DUE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**fc_payments** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_FC_ACT_PAYMENTS  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**fc_actual_tax** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_FC_ACT_TAX  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 112  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**taxable** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_TAXABLE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**payment_plan** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_PAY_PLAN_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**payment_schedule** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_PP_SCHED_CODE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 3  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**contact** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_NG_ORD_CONTACT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**bill_to_contact** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_NG_BTO_CONTACT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**requester_contact** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_NG_REQ_CONTACT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**account_rep** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_ACCT_REP  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**gross_area** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ASGN_TOT_SIZE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 92  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**promo_code** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_PROMO_CODE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 20  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**ordered_cost_total** | **double** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_COST_TOTAL  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 134  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**ship_to_account** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_SHIPTO_ACCT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**shipto_contact** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_SHIPTO_CONT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**gl_account** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_GLACCT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 30  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**issue_number** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_OCCURRENCE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**order_account_address_seq** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_ORD_ADDR_SEQ  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**bill_to_accountaddress_seq** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_BILLTO_ADDR_SEQ  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**requester_account_address_seq** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_REQ_ADDR_SEQ  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**ship_to_account_address_seq** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_SHIPTO_ADDR_SEQ  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**booth_number** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_BOOTH_NBR  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**exhibitor_id** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_EXHIBITOR_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**exhibitor_assignment_order** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; ER100_EXHIB_ORD_NBR  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**registrants** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; This property is only to be used when doing a POST for a new order.  You can input a comma delimited list of account codes (ex: \&quot;CODE1,CODE2\&quot;) that will act as the registrants on the new order.  Once the order is made, Ungerboeck will add, based on the registration type, registration order items for each order (ER101) and a registrant record for each registrant on the order (ER110).  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; cREGISTRANTS  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**registrant_type** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; Use this property when doing a POST on a new registration order.  Put the code of the registration type as its value.  All registrants attached to the order in the Registrants property will get an automatic order item assigned to it.  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; cREG_TYPE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Add Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**registration_order_user_field_sets** | [**\FomF\Ungerboeck\Client\Model\UserFields[]**](UserFields.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;API Help:&lt;/span&gt; This holds a list of user fields.  Edit the values in the respective user field.  This is not filled on searches.  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; CR073_ISSUES Table&lt;/span&gt;&lt;/div&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


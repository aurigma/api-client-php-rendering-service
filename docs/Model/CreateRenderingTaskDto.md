# # CreateRenderingTaskDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Rendering task description. | [optional]
**name** | **string** | Rendering task name. It should be unique within job task list. | [optional]
**namespace** | **string** | Rendering task namespace. It is used to find appropriate task processor in conjunction with &#39;Type&#39; property. | [optional]
**type** | **string** | Rendering task type. It is used to find appropriate task processor in conjunction with &#39;Namespace&#39; property.  /// | [optional]
**input_artifacts** | **string[]** | Input artifacts alias list. Defines task arguments which should be taken from artifacts storage. | [optional]
**parameters** | **array<string,mixed>** | Task processing parameters dictinary. | [optional]
**output_artifacts** | **string[]** | Output artifacts alias list. Defines task results which should be saved in artifacts storage. | [optional]
**final_artifacts** | **string[]** | Final artifacts alias list. Defines which task results should be included in job results. | [optional]
**processing_timeout** | **int** | Task processing timeout. | [optional]
**max_auto_retry_count** | **int** | Task processing automatic retry count limit. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

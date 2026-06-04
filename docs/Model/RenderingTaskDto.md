# # RenderingTaskDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Rendering task description. | [optional]
**id** | **string** | Rendering task identifier. | [optional]
**name** | **string** | Rendering task name. It should be unique within job task list. | [optional]
**namespace** | **string** | Rendering task namespace. It is used to find appropriate task processor. | [optional]
**type** | **string** | Rendering task type. It is used to find appropriate task processor.  /// | [optional]
**input_artifacts** | **string[]** | Input artifacts alias list. Defines task arguments which should be taken from artifacts storage. | [optional]
**parameters** | **array<string,mixed>** | Rendering task processing parameters. | [optional]
**output_artifacts** | **string[]** | Output artifacts alias list. Defines task results which should be saved in artifacts storage. | [optional]
**final_artifacts** | **string[]** | Final artifacts alias list. Defines which task results should be included in job results. | [optional]
**status** | [**\Aurigma\RenderingService\Model\RenderingTaskStatus**](RenderingTaskStatus.md) | Rendering task status. | [optional]
**requested** | **\DateTime** | Rendering task &#39;processing requested&#39; timestamp. | [optional]
**started** | **\DateTime** | Rendering task &#39;processing started&#39; timestamp. | [optional]
**finished** | **\DateTime** | Rendering task &#39;processing completed&#39; timestamp. | [optional]
**processing_timeout** | **int** | Rendering task processing timeout. | [optional]
**auto_retry_count** | **int** | Rendering task automatic retry count value. | [optional]
**long_execution** | **bool** | Rendering task &#39;long execution&#39; tag. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

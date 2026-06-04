# # RenderingJobDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project** | [**\Aurigma\RenderingService\Model\CreateRenderingJobDtoProject**](CreateRenderingJobDtoProject.md) |  | [optional]
**tasks** | [**\Aurigma\RenderingService\Model\RenderingTaskDto[]**](RenderingTaskDto.md) | Rendering task list. | [optional]
**status** | [**\Aurigma\RenderingService\Model\RenderingJobStatus**](RenderingJobStatus.md) | Rendering job status. | [optional]
**status_description** | **string** | Rendering job status description (error message if rendering job is in error state, otherwise empty). | [optional]
**created** | **\DateTime** | Rendering job creation timestamp. | [optional]
**started** | **\DateTime** | Rendering job launch timestamp. | [optional]
**finished** | **\DateTime** | Rendering job completion timestamp. | [optional]
**tenant_id** | **int** | Entity tenant identifier. | [optional]
**id** | **string** | Entity unique identifier. | [optional]
**owner_id** | **string** | Entity owner identifier. | [optional]
**last_modified** | **\DateTime** | Last entity modification date and time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

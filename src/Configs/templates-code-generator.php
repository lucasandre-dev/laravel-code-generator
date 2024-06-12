<?php

return [
    'disk' => 'templates',
    'templates' => [
        'clean-architecture' => [
            'operations' => [
                /**
                 * ACTIONS
                 */
                [
                    'template_location' => "/templates/Mockups/clean-architecture/Actions/CreateEntityActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/Create%entity%Action.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/Actions/UpdateEntityActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/Update%entity%Action.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/Actions/DeleteEntityActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/Delete%entity%Action.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/Actions/GetAllEntitiesActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/GetAll%entity%sAction.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/Actions/GetRegionsListAction.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/Get%entity%sListAction.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/Actions/GetEntityByIdActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/Get%entity%ByIdAction.php",
                ],


                /**
                 * CONTRACTS
                 */
                [
                    'template_location' => "templates/Mockups/clean-architecture/Contracts/EntityRepositoryInterface.txt",
                    'final_destination' => "/src/domain/%entity%/Contracts/%entity%RepositoryInterface.php",
                ],

                /**
                 * DTO
                 */
                [
                    'template_location' => "templates/Mockups/clean-architecture/DTO/CreateEntityInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/Create%entity%InputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/DTO/DeleteEntityInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/Delete%entity%InputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/DTO/EntityOutputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/%entity%OutputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/DTO/GetAllEntitiesInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/GetAll%entity%sInputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/DTO/GetEntityByIdInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/Get%entity%ByIdInputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-architecture/DTO/UpdateEntityInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/Update%entity%InputDto.php",
                ],

                /**
                 * ENTITIES
                 */
                [
                    'template_location' => "templates/Mockups/clean-architecture/Entities/Entity.txt",
                    'final_destination' => "/src/domain/%entity%/Entities/%entity%.php",
                ],

                /**
                 * FACADES
                 */
                [
                    'template_location' => "templates/Mockups/clean-architecture/Facades/EntityFacade.txt",
                    'final_destination' => "/src/domain/%entity%/Facades/%entity%Facade.php",
                ],

                /**
                 * MAPPERS
                 */
                [
                    'template_location' => "templates/Mockups/clean-architecture/Mappers/EntityMapper.txt",
                    'final_destination' => "/src/domain/%entity%/Mappers/%entity%Mapper.php",
                ],

                /**
                 * MODELS
                 */
                [
                    'template_location' => "templates/Mockups/clean-architecture/Models/EntityModel.txt",
                    'final_destination' => "/src/domain/%entity%/Models/%entity%Model.php",
                ],

                /**
                 * REPOSITORIES
                 */
                [
                    'template_location' => "templates/Mockups/clean-architecture/Repositories/EntityRepository.txt",
                    'final_destination' => "/src/domain/%entity%/Repositories/%entity%Repository.php",
                ],
            ],
        ]
    ]
];

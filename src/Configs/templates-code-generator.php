<?php

return [
    'clean-architecture' => [
        'operations' => [
            /**
             * ACTIONS
             */
            [
                'template_location' => "/src/Templates/Mockups/Main/Actions/CreateEntityActionMockup.txt",
                'final_destination' => "/src/domain/%entity%/Actions/Create%entity%Action.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/Actions/UpdateEntityActionMockup.txt",
                'final_destination' => "/src/domain/%entity%/Actions/Update%entity%Action.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/Actions/DeleteEntityActionMockup.txt",
                'final_destination' => "/src/domain/%entity%/Actions/Delete%entity%Action.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/Actions/GetAllEntitiesActionMockup.txt",
                'final_destination' => "/src/domain/%entity%/Actions/GetAll%entity%sAction.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/Actions/GetRegionsListAction.txt",
                'final_destination' => "/src/domain/%entity%/Actions/Get%entity%sListAction.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/Actions/GetEntityByIdActionMockup.txt",
                'final_destination' => "/src/domain/%entity%/Actions/Get%entity%ByIdAction.php",
            ],


            /**
             * CONTRACTS
             */
            [
                'template_location' => "src/Templates/Mockups/Main/Contracts/EntityRepositoryInterface.txt",
                'final_destination' => "/src/domain/%entity%/Contracts/%entity%RepositoryInterface.php",
            ],

            /**
             * DTO
             */
            [
                'template_location' => "src/Templates/Mockups/Main/DTO/CreateEntityInputDto.txt",
                'final_destination' => "/src/domain/%entity%/DTO/Create%entity%InputDto.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/DTO/DeleteEntityInputDto.txt",
                'final_destination' => "/src/domain/%entity%/DTO/Delete%entity%InputDto.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/DTO/EntityOutputDto.txt",
                'final_destination' => "/src/domain/%entity%/DTO/%entity%OutputDto.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/DTO/GetAllEntitiesInputDto.txt",
                'final_destination' => "/src/domain/%entity%/DTO/GetAll%entity%sInputDto.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/DTO/GetEntityByIdInputDto.txt",
                'final_destination' => "/src/domain/%entity%/DTO/Get%entity%ByIdInputDto.php",
            ],
            [
                'template_location' => "src/Templates/Mockups/Main/DTO/UpdateEntityInputDto.txt",
                'final_destination' => "/src/domain/%entity%/DTO/Update%entity%InputDto.php",
            ],

            /**
             * ENTITIES
             */
            [
                'template_location' => "src/Templates/Mockups/Main/Entities/Entity.txt",
                'final_destination' => "/src/domain/%entity%/Entities/%entity%.php",
            ],

            /**
             * FACADES
             */
            [
                'template_location' => "src/Templates/Mockups/Main/Facades/EntityFacade.txt",
                'final_destination' => "/src/domain/%entity%/Facades/%entity%Facade.php",
            ],

            /**
             * MAPPERS
             */
            [
                'template_location' => "src/Templates/Mockups/Main/Mappers/EntityMapper.txt",
                'final_destination' => "/src/domain/%entity%/Mappers/%entity%Mapper.php",
            ],

            /**
             * MODELS
             */
            [
                'template_location' => "src/Templates/Mockups/Main/Models/EntityModel.txt",
                'final_destination' => "/src/domain/%entity%/Models/%entity%Model.php",
            ],

            /**
             * REPOSITORIES
             */
            [
                'template_location' => "src/Templates/Mockups/Main/Repositories/EntityRepository.txt",
                'final_destination' => "/src/domain/%entity%/Repositories/%entity%Repository.php",
            ],
        ],
    ]
];

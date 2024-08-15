<?php

return [
    'disk' => 'templates',
    'template_default' => 'clean-arch-entity',
    'templates' => [
        'clean-arch-entity' => [
            'base_destination' => '/src/domain/',
            'operations' => [
                /**
                 * ACTIONS
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Actions/CreateEntityAction.txt",
                    'final_destination' => "%entity%/Actions/Create%entity%Action.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Actions/DeleteEntityAction.txt",
                    'final_destination' => "%entity%/Actions/Delete%entity%Action.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Actions/GetAllEntitysAction.txt",
                    'final_destination' => "%entity%/Actions/GetAll%entity%sAction.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Actions/GetEntityByIdAction.txt",
                    'final_destination' => "%entity%/Actions/Get%entity%ByIdAction.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Actions/UpdateEntityAction.txt",
                    'final_destination' => "%entity%/Actions/Update%entity%Action.php",
                ],


                /**
                 * CONTRACTS
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Contracts/EntityRepositoryInterface.txt",
                    'final_destination' => "%entity%/Contracts/%entity%RepositoryInterface.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Contracts/EntityMapperInterface.txt",
                    'final_destination' => "%entity%/Contracts/%entity%MapperInterface.php",
                ],

                /**
                 * DTO
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/DTO/CreateEntityInputDto.txt",
                    'final_destination' => "%entity%/DTO/Create%entity%InputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/DTO/DeleteEntityInputDto.txt",
                    'final_destination' => "%entity%/DTO/Delete%entity%InputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/DTO/EntityOutputDto.txt",
                    'final_destination' => "%entity%/DTO/%entity%OutputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/DTO/GetAllEntitysInputDto.txt",
                    'final_destination' => "%entity%/DTO/GetAll%entity%sInputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/DTO/GetEntityByIdInputDto.txt",
                    'final_destination' => "%entity%/DTO/Get%entity%ByIdInputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/DTO/UpdateEntityInputDto.txt",
                    'final_destination' => "%entity%/DTO/Update%entity%InputDto.php",
                ],

                /**
                 * ENTITIES
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Entities/Entity.txt",
                    'final_destination' => "%entity%/Entities/%entity%.php",
                ],

                /**
                 * FACADES
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Facades/EntityFacade.txt",
                    'final_destination' => "%entity%/Facades/%entity%Facade.php",
                ],

                /**
                 * MAPPERS
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Mappers/EntityMapper.txt",
                    'final_destination' => "%entity%/Mappers/%entity%Mapper.php",
                ],

                /**
                 * MODELS
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Models/EntityModel.txt",
                    'final_destination' => "%entity%/Models/%entity%Model.php",
                ],

                /**
                 * PROFILES
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Profiles/EntityProfile.txt",
                    'final_destination' => "%entity%/Profiles/%entity%Profile.php",
                ],

                /**
                 * REPOSITORIES
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-entity/Domain/Repositories/EntityRepository.txt",
                    'final_destination' => "%entity%/Repositories/%entity%Repository.php",
                ],
            ],
        ],
        'clean-arch-tests' => [
            'base_destination' => '/tests/Feature/',
            'operations' => [
                /**
                 *  TESTS
                 */
                [
                    'template_location' => "templates/Mockups/clean-arch-tests/Tests/EntityTest.txt",
                    'final_destination' => "%entity%/%entity%Test.php",
                ],
            ],
        ],
    ]
];

<?php

return [
    'disk' => 'templates',
    'templates' => [
        'CA-doctrine-tests' => [
            'operations' => [
                /**
                 * ACTIONS
                 */
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Actions/CreateEntityActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/Create%entity%Action.php",
                ],
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Actions/UpdateEntityActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/Update%entity%Action.php",
                ],
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Actions/DeleteEntityActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/Delete%entity%Action.php",
                ],
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Actions/GetAllEntitiesActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/GetAll%entity%sAction.php",
                ],
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Actions/GetEntityByIdActionMockup.txt",
                    'final_destination' => "/src/domain/%entity%/Actions/Get%entity%ByIdAction.php",
                ],


                /**
                 * CONTRACTS
                 */
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Contracts/EntityRepositoryInterface.txt",
                    'final_destination' => "/src/domain/%entity%/Contracts/%entity%RepositoryInterface.php",
                ],

                /**
                 * DTO
                 */
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/DTO/CreateEntityInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/Create%entity%InputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/DTO/DeleteEntityInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/Delete%entity%InputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/DTO/EntityOutputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/%entity%OutputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/DTO/GetAllEntitiesInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/GetAll%entity%sInputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/DTO/GetEntityByIdInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/Get%entity%ByIdInputDto.php",
                ],
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/DTO/UpdateEntityInputDto.txt",
                    'final_destination' => "/src/domain/%entity%/DTO/Update%entity%InputDto.php",
                ],

                /**
                 * ENTITIES
                 */
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Entities/Entity.txt",
                    'final_destination' => "/src/domain/%entity%/Entities/%entity%.php",
                ],

                /**
                 * FACADES
                 */
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Facades/EntityFacade.txt",
                    'final_destination' => "/src/domain/%entity%/Facades/%entity%Facade.php",
                ],

                /**
                 * MAPPERS
                 */
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Mappers/EntityMapper.txt",
                    'final_destination' => "/src/domain/%entity%/Mappers/%entity%Mapper.php",
                ],

                /**
                 * MODELS XML
                 */
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/ModelsXML/Entity.orm.txt",
                    'final_destination' => "/src/domain/%entity%/ModelsXML/%entity%.orm.xml",
                ],

                /**
                 * REPOSITORIES
                 */
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Domain/Repositories/EntityRepository.txt",
                    'final_destination' => "/src/domain/%entity%/Repositories/%entity%Repository.php",
                ],


                /**
                 * ******************************************************************************************
                 *  TESTS
                 * ******************************************************************************************
                 */
                [
                    'template_location' => "templates/Mockups/CA-doctrine-tests/Tests/EntityTest.txt",
                    'final_destination' => "/tests/Feature/%entity%/%entity%Test.php",
                ],
            ],
        ]
    ]
];

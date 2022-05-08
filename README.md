<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://kleryston.com.br/logo_kleryston_api.svg" width="400" style="margin-top: 50px; margin-bottom: 30px;"></a></p>

# Klimed Saúde API Com Autenticação em JWT
Esta API criada para fins de testes, e possui poucas rotas e dados, mas é ótima para usar em projetos front end, podendo ser melhorada com a adição de mais rotas e outros itens, no momentos só há os models abaixo e seus  respectivos relacionamentos.

#### **OBS:** *Para fins de testes, na raiz do projeto existe um arquivo de exportação de collections chamado **kleryston_med_saude_api.postman_collection**, que pode ser utilizado no **POSTMAN**, com todas os endpoints e payloads.*
<br>

#### Models usados no projeto
* Appointment
* Doctor
* Healthplan
* Patient
* Procedure
* Specialty
* User

#### Uso
Clone o projeto via git clone ou baixe o arquivo zip.

#### .env
Copie o conteúdo do arquivo .env.example para o arquivo .env. Crie um banco de dados e conecte seu banco de dados no arquivo .env.
#### Composer Install
Na raiz do projeto via terminal, execute o comando abaixo para instalar os pacotes.
#### `composer install`
#### Generate Key
Após a instalação, caso necessário, execute o seguinte comando para gerar uma nova Key do laravel.
#### `php artisan key:generate`
#### Run Migration
Se sua configuração do banco estiver correta, execute o comando abaixo para gerar as tabelas do banco de dados.
#### `php artisan migrate`
#### Database Seeding
 Para finalizar, execute o comando abaixo para gerar alguns dados de exemplo para a api, deixei apenas alguns itens para fins de testes, mas nada impede que vc adicione mais alterando as seeds.
#### `php artisan db:seed`
## <br>
# API EndPoints

# Auth
* Login POST `/api/login`
        
        {
            "email": "admin@mail.com",
            "password": "admin123"
        }

* Logout POST `/api/logout`        
## <br>
# Patients
* Patient GET All `/api/patients`
* Patient GET Single `/api/patients/1`        
* Patient POST Create `/api/patients`
        
        {
            "name": "Paciente de Teste",
            "birthDate": "2022-10-15",
            "phone": "81994003340",
            "health_plans": [5, 3 ,1] - Não obrigatório
        }
        
* Patient PUT Update `/api/patients/1`

        {
            "name": "Paciente de Teste",
            "birthDate": "2022-10-15",
            "phone": "81994003340",
            "health_plans": [5, 3 ,1] - Não obrigatório
        }
        
* Patient DELETE Destroy `/api/patients/1`
## <br>
# Health Plan

* Healthplans GET All `/api/healthplans`
* Healthplans GET Single `/api/healthplans/1`        
* Healthplans POST Create `/api/healthplans`
        
        {
            "description": "Plano de Saúde de Teste",
            "phone": "(81) 9 9400-3340"
        }
        
* Healthplans PUT Update `/api/healthplans/1`

        {
            "description": "Plano de Saúde de Teste",
            "phone": "(81) 9 9400-3340"
        }
        
* Healthplans DELETE Destroy `/api/healthplans/1`
## <br>
# Doctors

* Doctors GET All `/api/doctors`
* Doctors GET Single `/api/doctors/1`        
* Doctors POST Create `/api/doctors`
        
        {
            "name": "Dr. Chris Redfield",
            "crm": "CRM-PE 564872",
            "specialty": [3, 5]
        }
        
* Doctors PUT Update `/api/doctors/1`

        {
            "name": "Dr. Chris Redfield",
            "crm": "CRM-PE 564872",
            "specialty": [3, 5] - Não obrigatório aqui
        }
        
* Doctors DELETE Destroy `/api/doctors/1`
## <br>
# Specialtys

* Specialtys GET All `/api/specialtys`
* Specialtys GET Single `/api/specialtys/1`        
* Specialtys POST Create `/api/specialtys`
        
        {
            "name": "Acupuntura"
        }
        
* Specialtys PUT Update `/api/specialtys/1`

        {
            "name": "Acupuntura"
        }
        
* Specialtys DELETE Destroy `/api/specialtys/1`
## <br>
# Procedures

* Procedures GET All `/api/procedures`
* Procedures GET Single `/api/procedures/1`        
* Procedures POST Create `/api/procedures`
        
        {
            "name": "Procedimetno de Teste",
            "price": 1970.55
        }
        
* Procedures PUT Update `/api/procedures/1`

        {
            "name": "Procedimetno de Teste",
            "price": 2520.80
        }
        
* Procedures DELETE Destroy `/api/procedures/1`

## <br>
# Appointments

* Appointments GET All `/api/appointments`
* Appointments GET Single `/api/appointments/1`        
* Appointments POST Create `/api/appointments`
        
        {
            "patient_id": "1",
            "doctor_id": "3",
            "procedure_id": "5",
            "date": "2022-06-30",
            "hour": "14:30",
            "private": 1
        }
        
* Appointments PUT Update `/api/appointments/1`

        {
            "patient_id": "1",
            "doctor_id": "3",
            "procedure_id": "5",
            "date": "2022-06-30",
            "hour": "14:30",
            "private": 1
        }
        
* Appointments DELETE Destroy `/api/appointments/1`

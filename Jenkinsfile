pipeline {

    agent any

    stages {


        stage('Install Dependencies') {

            steps {

                bat '''
                composer install --no-interaction
                '''

            }
        }


        stage('Project Check') {

            steps {

                echo 'Checking Laravel Project'

                bat 'php -v'

                bat 'composer -V'

                bat 'php artisan --version'

            }
        }


        stage('Laravel Setup') {

            steps {

                bat '''
                if not exist .env copy .env.example .env

                php artisan key:generate

                '''

            }
        }


        stage('Run Laravel Test') {

            steps {

                bat '''
                php artisan test

                '''

            }
        }


        stage('Success') {

            steps {

                echo 'Laravel CI Pipeline Completed Successfully'

            }
        }


    }

}

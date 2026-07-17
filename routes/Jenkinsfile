pipeline {

    agent any

    stages {

        stage('Project Check') {
            steps {
                echo 'Checking Laravel Project'

                bat 'php -v'

                bat 'composer -V'

                bat 'php artisan --version'
            }
        }


        stage('Install Dependencies') {
            steps {
                bat 'composer install --no-interaction'
            }
        }


        stage('Laravel Setup') {
            steps {
                bat '''
                copy .env.example .env
                php artisan key:generate
                '''
            }
        }


        stage('Run Laravel Test') {
            steps {
                bat 'php artisan test'
            }
        }


        stage('Success') {
            steps {
                echo 'Laravel Jenkins Pipeline Completed'
            }
        }

    }
}

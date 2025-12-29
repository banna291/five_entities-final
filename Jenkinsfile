pipeline {
    agent any

    stages {

        stage('Checkout Code') {
            steps {
                git branch: 'main',
                    url: 'https://github.com/banna291/five_entities-final.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t five-entities-app .'
            }
        }

        stage('Stop Old Container') {
            steps {
                sh 'docker rm -f five-entities-container || true'
            }
        }

        stage('Run Docker Container') {
            steps {
                sh 'docker run -d -p 8081:80 --name five-entities-container five-entities-app'
            }
        }
    }
}

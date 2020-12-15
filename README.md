# Kubernetes-php-example
This is a example for checking kubernetes concepts
using php internal web server.


### prerequisite
 - Installed [minikube](https://minikube.sigs.k8s.io/docs/start/)
 - Basic knowledge of docker

### How to use
 1. set docker environment using minikbe docker-env
    ```
        eval $(minikube docker-env)

        # if you're using windows, just type minikube docker-env and
        # copy last of output, run it on powershell.
    ```
 2. build docker image.
    ```
        docker build -t gwkim/php .
    ```
 3. create kubernetes deployment.
    ```
        kubectl apply -f sample-deployment.yaml
    ```
 4. create service and expose.
    ```
        kubectl expose deployment sample --type=LoadBalancer
    ```
 5. using minikube service, check the load balancing mechanism!
    ```
        minikube service sample

        # If run it, you will see a browser tab open.
        # Refresh it so you can check load balancing.
    ```
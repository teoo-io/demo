# 🎮 WebRover SCADA 🎮

A containerized version of [BFirsh's](https://github.com/bfirsh) React-based web UI for [JSNES](https://github.com/bfirsh/jsnes).

## 📍 Getting Started
TBT

### 🐳 Docker
First, make sure Docker is installed. Then, from the repository directory, build the Docker image from source, and run it.

```BASH
    $ sudo docker build --tag scada .       # Use the Dockerfile to build a docker container using the source
    $ sudo docker run -it -p 80:80 scada:latest       # you can also run the container detached by using -d instead of -it
```
This will make the app available from a local browser at [http://localhost80](http://localhost)

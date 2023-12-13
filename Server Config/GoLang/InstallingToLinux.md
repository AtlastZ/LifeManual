# GoLang Server Installation.

## 1.Install GoLang to AWS Ec2

First, run the following command to download GoLang packages

```
wget https://golang.org/dl/go1.x.x.linux-amd64.tar.gz

```

After downloading GoLang <br>
run the following command to install GoLang packages into your environment.

```
sudo tar -C /usr/local -xzf go1.x.x.linux-amd64.tar.gz
```

Setting GoLang environment variables <br>by edit the `.bashrc` or `.bash_profile` file to add the following lines at the end:

```
nano ~/.bashrc

```

or

```
source ~/.bash_profile

```

Add the following lines at the end of the file:

```
export PATH=$PATH:/usr/local/go/bin
export GOPATH=$HOME/go
export PATH=$PATH:$GOPATH/bin
```

Then, apply the changes

```
source ~/.bashrc
```

or

```
source ~/.bash_profile

```

Let's try to run the following command to checking Golang package version

```
go version

```

## Starter Service

First, you need to build and run your Go application. Use the go run command to execute your Go code:
### 1. Check Permissions:
Make sure the user (ec2-user in this case) has execute permissions for the Go binary:
```
chmod +x yourpackagedirectorywithout.go

```
### 2. Correct the Command:
If hello is a Go source file, you should compile it first before running.<br> If it's already compiled, make sure you are running the correct binary file, not the source file.
```
go build yourpackagedirectorywith.go
nohup yourpackagedirectorywithout.go &
```
If you haven't compiled it yet, you can compile it using:
```
go build -o /home/ec2-user/GoLang/EVDOCKTHAPI/hello /home/ec2-user/GoLang/EVDOCKTHAPI/hello.go
```
### 3. Check User Ownership:
Ensure that the files and directories are owned by the correct user. If you copied the files using sudo or another user, you might need to change ownership:
```
sudo chown -R ec2-user:ec2-user yourpackagefolder
```
### 4. Verify the nohup Command:
Make sure you're using the correct spelling of `nohup`. The correct command is `nohup`, not `nohub`. The error you encountered earlier seems to be a result of the misspelled command.
```
nohub
```

### 5. Check for Other Issues:
Review the content of the nohup.out file to see if it provides more information about the problem:
```
cat nohup.out
```
## Stopping API Server
To stop a process started with `nohup`, you can use the kill command.
### 1. Find the Process ID (PID) of the running process:
```
pgrep -fl yourpackagename
```
This command will display the PID and the command associated with the process. 
<br> <br>
Use the kill command to stop the process:
```
kill PID
```
Alternatively, you can use the pkill command to kill a process by name:
```
pkill -f yourpackagename
```
This command will find and terminate all processes with the name "hello."

After executing one of these commands, the process should be terminated. You can verify that the process has stopped by checking if it appears in the process list:
```
pgrep -fl yourpackagename
```
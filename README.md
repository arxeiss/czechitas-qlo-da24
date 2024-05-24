#




## docker build

### QloApps
install desire version of qloApps
```bash
git clone https://github.com/Qloapps/QloApps.git qloapps
rm qloapps/.git -rf
```

### Build
```bash
docker build -t tomaswidlak/czechitas-qloapps:<tag> .
```

### Push
```bash
docker push tomaswidlak/czechitas-qloapps:<tag>
```


### Quick build
```bash
docker build -t tomaswidlak/czechitas-qloapps:legacy .
```

```bash
docker build -t tomaswidlak/czechitas-qloapps:legacy .
docker push tomaswidlak/czechitas-qloapps:legacy
```
cleanup
```bash
sudo rm -rf ./test/appData
```
```bash
sudo rm -rf ./test/mysql
```


### REDEPLOY full
```bash
docker build -t tomaswidlak/czechitas-qloapps:legacy .
docker push tomaswidlak/czechitas-qloapps:legacy
sudo rm -rf ./test/appData
sudo rm -rf ./test/mysql
```

## Running the app
First run image with `init` command (more in `/test/docker-compose.yaml`). After app installation, run container without init command

## Test app credentials

- Website name : `[[twTestWebsiteName]]`
- Name: `[[twTestName]]`
- Surname `[[twTestSurname]]`


- email: `testEmail@test.com`
- pass: `UmXe@8F6k*Rt7o`

- token: `my_static_token`

# TODO
1. Neodesilat emaily
1. Nastavit logo
1.

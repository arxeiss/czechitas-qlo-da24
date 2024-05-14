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
docker build -t tomaswidlak/czechitas-qloapps:test .
```

### Push 
```bash
docker push tomaswidlak/czechitas-qloapps:test
```

## Running the app 
First run image with `init` command (more in `/test/docker-compose.yaml`). After app installation, run container without init command

## Test app credentials 

- Website name : `[[twTestWebsiteName]]`
- Name: `[[twTestName]]`
- Surname `[[twTestSurname]]`


- email: `testEmail@test.com`
- pass: `UmXe@8F6k*Rt7o`

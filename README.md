# 




## docker build

QloApps
install desire version of qloApps
```bash
git clone https://github.com/Qloapps/QloApps.git qloapps
rm qloapps/.git -rf
```


Build
```bash
docker build -t tomaswidlak/czechitas-qloapps:test .
```



Push 
```bash
docker push tomaswidlak/czechitas-qloapps:test
```



## Vars

- Website name : `[[twTestWebsiteName]]`
- Name: `[[twTestName]]`
- Surname `[[twTestSurname]]`


- email: `testEmail@test.com`
- pass: `UmXe@8F6k*Rt7o`
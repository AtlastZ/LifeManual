
# Writing SQL 

ใช้เป็นคู่มือในการทำงานร่วมกับภาษา SQL


## Example table

| CustomerID | Customers | Age |
| :-------- | :------------------------- | :-------|

## KEYWORD

#### Filter command 

````
SELECT * FROM Customers;
````
| command | Description                  | Example |
| :------ | :------------------------- | :-------|
| `SELECT + "ไอเทมที่ต้องการดึง"`  | ใช้เลือกไอเทมที่ต้องการดึงถ้าต้องการทั้งหมดใส่ | SELECT * |
| `FROM + "ชื่อตารางทีต้องการดึง"`  | ใช้เลือกตารางที่ต้องการดึงข้อมูล(**จำเป็น**) | FROM Customers |
| `WHERE + "ตัวเลือกที่ต้องการกรอง"`  | ใช้กรองข้อมูลตามเงื่อนไขเท่านั้น |
| `"เงื่อนไข1" + AND + "เงื่อนไข2"`  | ใช้รวมกับคำสั่งก่อนหน้าเพื่อให้เลือกข้อมูลที่มีทั้งสองเงื่อนไง |
| `"เงื่อนไข1" + OR + "เงื่อนไข2"`  | ใช้รวมกับคำสั่งก่อนหน้าเพื่อให้เลือกข้อมูลที่มีสองเงื่อนไงอย่างใดอย่างหนึ่ง |
| `UPDATE`  |  |
| `DELETE`  |  |
| `COUNT`   |  |
| `COUNT(dis)`   |  |
| `SUM + "" + AS ""`   |  |
| `AVG`   |  |
| `MIN`   |  |
| `MAX`   |  |
| `GROUP BY`   |  |

#### ลำดับคำสั่ง 
![alt text](https://media.discordapp.net/attachments/669129360946495511/1179679372614045816/image.png?ex=657aa907&is=65683407&hm=3f89b85203447dcd7406722feb781197463d64a160fe5ea054fb20f1c02f749c&=&format=webp&quality=lossless&width=877&height=662)
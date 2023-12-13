# Next.js

Next.js is a Server Site Rendering (SSR) and Static Site Generation (SSG) website

## Pros SSR

ช่วยเรื่อง Search engine optimization ขึ้นใน search engine ได้ไว <br>
หน้าเว็บพร้อมใช้งานได้เร็ว

## Cons SSR

เพิ่มต้นทุนฝั่ง server <br>
ไม่สามารถทำงานร่วมกับ js หรือ framework บางตัวได้ เพราะต้องรันบนฝั่ง client เท่านั้น <br>
ข้อจำกันการสื่อสาร request กับ server

## Pros SSG

มีความปลอดภัยสูงเพราะหน้าเว็บมีช้อมูลทุกอย่างอยู่แล้ว ไม่ต้องคอpคุยกับ server <br>
เนื่องจากไม่ต้องคอยคุยกับ server ตลอดเวลาทำให้ประหยัดค่าใช้จ่าย

## Cons SSG

เมื่อมีการอัพเดทหน้าเว็บจะต้องทำการ build app ใหม่ทั้งหมดซึ่งใช้เวลานาน <br>
ถ้าหากหน้าเว็บมีหลายหน้ายิ่งใช้เวลาในการ build นานมาก <br>

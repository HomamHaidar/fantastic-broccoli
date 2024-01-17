
# School Management System 🏫

A comprehensive school management system that allows you to control the academic grades, classes, and sections, along with the ability to manage the students and teachers within them. The system will also have multiple levels of permissions for the accounts of parents, students, and teachers, in addition to managing the school's financial matters.


![345b2ff6-9a7b-4548-bcfd-36bec03d7e7e](https://github.com/HomamHaidar/school_management/assets/147708704/15ed2e7d-5671-48d0-bc7d-5707be9122a1)

![6274ffad-d911-4b0a-8d7c-de96089306f4](https://github.com/HomamHaidar/school_management/assets/147708704/5435e3da-93ca-435c-aeee-a4582da6491c)

![9b00fabb-3935-4d49-bbd5-2bba123d1c65](https://github.com/HomamHaidar/school_management/assets/147708704/b4172d87-e86e-49ca-99f4-ee917948cd5c)

![6fc1a819-268b-4393-ae14-d49a0de62291](https://github.com/HomamHaidar/school_management/assets/147708704/b9431902-817e-4fe3-823e-5e29b326afa8)

![78608c8e-b811-4d90-8d89-f5d75318e9e5](https://github.com/HomamHaidar/school_management/assets/147708704/6bc5806b-93e6-4652-aa61-24dc2c8f7837)

![176454ff-d287-4bd6-8700-6c2ad2ee6497](https://github.com/HomamHaidar/school_management/assets/147708704/4532d32c-6167-467c-a489-ce6282983aa9)

![480c615c-384d-487a-9c54-cbd80d61cb23](https://github.com/HomamHaidar/school_management/assets/147708704/07597187-6464-4d49-9fe3-5a35d5d6b7a8)

![74b18f75-e86d-4fbc-a20e-fafce41513d5](https://github.com/HomamHaidar/school_management/assets/147708704/715fb88a-c0d9-46b9-8c8b-f94816cd1595)

![4b536ae5-175e-4261-a9b0-bc9e1cbe05e2](https://github.com/HomamHaidar/school_management/assets/147708704/acde5b65-143a-424f-a967-1bdd117bae5c)


## Features
- EN/AR 🌐
- Fullscreen mode 🖥
- Determine the number of academic stages in your school, in addition to the currently active classes 📖
- You can track your students exam grades, attendance days, and send reports to their parents through their accounts on the system.👨‍👩‍👧‍👦
- You can handle fee management, including receipt transactions, cash refunds, and all matters related to the school's treasury 💲
- Your teachers can create automated test questions, and the results will be automatically generated and issued to the students immediately after the exam ends ⁉️ 💯
- You can add the college's private library that contains all the books uploaded by you 📚
## Installation

> **Warning**
> Make sure to follow the requirements first.

Here is how you can run the project locally:
1. Clone this repo
    ```sh
    git clone git@github.com:HomamHaidar/school_management.git
    ```

1. Go into the project root directory
    ```sh
    cd  school_management
    ```

1. Copy .env.example file to .env file
    ```sh
    cp .env.example .env
    ```
1. Create database `school` (you can change database name)

1. Install PHP dependencies 
    ```sh
    composer install
    ```

1. Generate key 
    ```sh
    php artisan key:generate
    ```


1. Run migration
    ```
    php artisan migrate
    ```
    
1. Run seeder
    ```
    php artisan db:seed
    ```
      this command will create  user (admin) and  configure the settings :
     > email: homamhaidar18@gmail.com , password: 12345678

  
1. Run server 

   
    ```sh
    php artisan serve
    ```  
Visit localhost:8000 in your favorite browser.


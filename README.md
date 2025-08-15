
# 🎨 Design Corner

## 📌 Overview
**Design Corner** is a mobile and web-based application built for a small startup specializing in **Logo Designing**, **Package Designing**, and **Marketing** services.  
The app serves as a **central hub** for clients to place orders, track project progress, manage payments, and review proofs of completion — all in one place.

## 🛠 Tools & Technologies
- **Cordova** – Cross-platform mobile app development
- **SQL** – Database for storing orders, payments, and project details
- **PHP** – Backend logic and API services
- **JavaScript** – Frontend interactivity
- **Node.js** – Server-side scripting
- **HTML/CSS** – UI layout and design

## 📦 Installation & Usage
- Clone the repository
    ```bash

    git clone https://github.com/yourusername/design-corner.git
    cd design-corner

    ```
- Install dependencies
    ``` bash
    npm install 
    ```

- Prepare Cordova platform
    ``` bash
    cordova platform add android
    ```

- Run the application (if your system having Android Virtual device)
    ``` bash
    cordova run android
    ```


## 📂 Pages & Features
| Page | Description |
|------|-------------|
| **Home** | Overview of services and quick navigation |
| **About** | Information about Design Corner |
| **Billing** | Payment history, invoices, and pending dues |
| **Contact Us** | Contact form and support details |
| **Profile** | User profile management |
| **Order Status** | Live tracking of project progress |
| **Order Placing** | Form to submit new orders with project requirements |

## 📂 File Structure

```
config.xml
package.json
www
├── css
├── images
├── img
├── js
├── Menu
├── pages
├── pages-links
└── index.html

Sample SQL files to showcase backend structure:
└── id17502114_design_corner_app.sql
public-html
├── control
├── css
├── images
├── img
├── js
├── Menu
├── pages
├── .htaccess
└── index.php
```
## 🎯 Purpose
This app streamlines the client experience for **Design Corner**, allowing:
- Easy order placement
- Transparent progress tracking
- Proof and approval workflow for designs
- Payment management
- Direct communication with the service provider

## 🚀 How It Works
1. **Client downloads and installs the app**.
2. **Places an order** by providing design requirements.
3. **Design Corner team works on the project** and uploads proofs.
4. **Client reviews and approves/rejects** the design.
5. **Payments are processed** and stored in the app.
6. **Order is marked as completed** once approved and paid.

## 🖼 Example Workflow
```
Order Placed → Proof Uploaded → Client Review → Payment → Delivery
```

## 📄 License
This project is **open-source**, but libraries or frameworks used within may have their own respective licenses.

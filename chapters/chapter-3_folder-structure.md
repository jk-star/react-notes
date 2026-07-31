
# Chapter-3 Folder Structure

## Folder Structure
- Project create hone ke baad kuch aisa dikhega:
<cdoe><pre>
my-first-app
│
├── node_modules
├── public
├── src
├── .gitignore
├── index.html
├── package.json
├── package-lock.json
├── vite.config.js
</pre></code>

## 1. node_modules
- Ye project ki saari installed libraries rakhta hai.

**Example**
<code><pre>
React

Vite

Babel

etc.
</pre></code>

**Important**

- ❌ Is folder ko kabhi manually edit mat karna.

## 2. public
- Static files

**Example**
<code><pre>
logo.png

favicon.ico

robots.txt
</pre></code>

## 3. src
- Sabse important folder.
- Yahi tumhara actual React code hota hai.
<code><pre>
src

├── App.jsx
├── main.jsx
├── assets
</pre></code>

## 4. App.jsx
- Ye main component hai.
- Abhi default React page isi se aata hai.
- Baad me hum isme apna UI banayenge.

## 5. main.jsx
- Ye project ka entry point hai.
- Flow samjho:
<code><pre>
main.jsx

↓

App.jsx

↓

Browser
</pre></code>

- Yani main.jsx React app ko browser me mount karta hai.

## 6. assets

- Images
- SVG
- Icons
- Fonts
- Ye sab yahan rakhte hain.

## 7. package.json
- Ye project ka "identity card" hai.
- Isme hota hai:
    - Project name
    - Version
    - Scripts
    - Dependencies

**Example**

<code><pre>
{
  "name": "my-first-app"
}
</pre></code>

## 8. vite.config.js
- Vite ki settings.
- Abhi isko touch nahi karenge.
- Baad me use karenge.
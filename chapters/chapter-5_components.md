# Chapter 5 - Components

## 1. Component Kya Hai?
- Component React ka ek reusable UI block hota hai.
- Component = Reusable Code
- Write Once → Use Everywhere

## 2. Functional Component
- React me mostly hum Functional Components banate hain.

**Example**

<code><pre>
function App() {
  return <h1>Hello React</h1>;
}

export default App;
</pre></code>

- Ye bhi ek component hai.

## 3. Apna Pehla Component Banate Hain

**Step 1**

1. `Open `src`
1. Ek folder banao `components`

**Step 2**
1. `components/Header.jsx`

<code><pre>
function Header() {
  return <h1>Welcome to My Website 🚀</h1>;
}

export default Header;
</pre></code>

**Step 3**

- Open `App.jsx`

<code><pre>
import Header from "./components/Header";

function App() {
  return (
    <>
      <Header />
    </>
  );
}

export default App;
</pre></code>

## 4. Import Ka Matlab

`import Header from "./components/Header";`

- **Simple Meaning:** "Header component ko yahan lekar aao."

## 5. Export Ka Matlab

`export default Header;`

- **Simple Meaning:** "Is component ko dusri files me use karne ki permission do."

## 6. Component Naming Rules
- ✅ First letter Capital hona chahiye.

**Correct**

- Header
- Footer
- Navbar
- ProductCard

**Wrong**

- header
- footer
- navbar

## 7. Component File Names
- Navbar.jsx
- Footer.jsx
- Sidebar.jsx
- Hero.jsx
- ProductCard.jsx

## 8. React Flow

<code><pre>
main.jsx

↓

App.jsx

↓

Header.jsx

↓

Footer.jsx

↓

Browser
</pre></code>

## Interview Questions

**Q1. Component kya hota hai?**
- Reusable UI block.

**Q2. React me sabse common component type?**
- Functional Component.

**Q3. Component ka naam Capital letter se kyu start hota hai?**
- React Capitalized names ko custom components samajhta hai.

**Q4. Import aur Export me difference?**
- ``export`` → Component ko dusri files ke liye available banana.
- ``import`` → Component ko current file me use karna.
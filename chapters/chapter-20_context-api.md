# Chapter 20 – Context API ⭐

## 1. Pehle Problem Samjho – Prop Drilling
- Maan lo components ka structure hai:

<code><pre>
App
 ↓
Home
 ↓
Profile
 ↓
User
</pre></code>

`App` ke paas user ka naam hai:

`const username = "Jyoti";`

- Lekin `username` User component ko chahiye.

**Normal Props se:**

<code><pre>
App
 │
 │ username="Jyoti"
 ↓
Home
 │
 │ username
 ↓
Profile
 │
 │ username
 ↓
</pre></code>

- Problem ye hai ki `Home` aur `Profile` ko username ki zarurat bhi nahi hai.
- Phir bhi unke through props pass karni padegi.
- Isko kehte hain:

**Prop Drilling**

## 2. Prop Drilling Example

`App.jsx`

<code><pre>
function App() {
  const username = "Jyoti";

  return &lt;Home username={username} /&gt;;
}
</pre></code>

`Home.jsx`

<code><pre>
function Home({ username }) {
  return &lt;Profile username={username} /&gt;;
}
</pre></code>

`Profile.jsx`

<code><pre>
function Profile({ username }) {
  return &lt;User username={username} /&gt;;
}
</pre></code>

`User.jsx`

<code><pre>
function User({ username }) {
  return &lt;h1&gt;Hello {username}&lt;/h1&gt;;
}
</pre></code>

**Result:**

Hello Jyoti

- Result sahi hai ✅
- Lekin data unnecessary components se travel kar raha hai.

## 3. Context API Solution

- Context API ke saath:

<code><pre>
            Context
                │
        ┌───────┼───────┐
        ↓       ↓       ↓
      Home   Profile   User
</pre></code>

- Ab beech ke components ko props forward karne ki zarurat nahi.
- `User` direct Context se data le sakta hai.

## 4. Context API Kya Hai?

- Context API React me data ko multiple components ke saath share karne ka built-in system hai, bina har level par props pass kiye.

**Examples:**

<code><pre>
Logged-in User
Theme
Language
Shopping Cart
App Settings
</pre></code>

## 5. Context API ke 3 Main Steps ⭐

- Bas ye teen cheeze yaad rakho:

<code><pre>
1. Create
      ↓
createContext()

2. Provide
      ↓
Provider

3. Use
      ↓
useContext()
</pre></code>

Easy trick:

**Create → Provide → Use**

## 6. Step 1 – Context Create Karo

**Folder banao:**

<code><pre>
src/
│
├── context/
│   └── UserContext.jsx
│
├── App.jsx
└── main.jsx
</pre></code>

`UserContext.jsx`

<code><pre>
import { createContext } from "react";

const UserContext = createContext();

export default UserContext;
</pre></code>

## 7. Step 2 – Provider

- Ab decide karna hai ki kaunsa data globally share karna hai.

`App.jsx`

<code><pre>
import UserContext from "./context/UserContext";
import Profile from "./Profile";

function App() {
  const username = "Jyoti";

  return (
    &lt;UserContext.Provider value={username}&gt;
      &lt;Profile /&gt;
    &lt;/UserContext.Provider&gt;
  );
}

export default App;
</pre></code>

**Important part:**

`<UserContext.Provider value={username}>`

**Meaning:**

- Iske andar jitne components hain, wo username access kar sakte hain.

## 8. Step 3 – useContext()
- Ab `Profile` ko data chahiye.

`Profile.jsx`
<code><pre>
import { useContext } from "react";
import UserContext from "./context/UserContext";

function Profile() {
  const username = useContext(UserContext);

  return (
    &lt;h1&gt;Hello {username}&lt;/h1&gt;
  );
}

export default Profile;
</pre></code>

**Output**

`Hello Jyoti`

- Aur humne `<Profile username={username} />` prop pass nahi ki.

**Complete Flow**

<code><pre>
createContext()
      ↓
UserContext
      ↓
Provider
      ↓
value="Jyoti"
      ↓
useContext(UserContext)
      ↓
"Jyoti"
</pre></code>

- Yahi Context API ka core concept hai.

## 9. Multiple Values Share Karna

- Usually sirf ek value nahi hoti.

**Suppose:**

<code><pre>
const username = "Jyoti";
const role = "Developer";
</pre></code>

- Provider me object bhej sakte hain:

<code><pre>
&lt;UserContext.Provider
  value={{
    username,
    role
  }}
&gt;
  &lt;Profile /&gt;
&lt;/UserContext.Provider&gt;
</pre></code>

**Receive:**

`const { username, role } = useContext(UserContext);`

**Use:**

<code><pre>
function Profile() {
  const { username, role } = useContext(UserContext);

  return (
    &lt;&gt;
      &lt;h2>{username}&lt;/h2&gt;
      &lt;p&gt;{role}&lt;/p&gt;
    &lt;/&gt;
  );
}
</pre></code>

**Output:**

Jyoti
Developer

## 10. Context + useState ⭐

- Ab real-world example.
- Context me sirf static data nahi, State bhi share kar sakte hain.

`const [user, setUser] = useState("Jyoti");`

**Provider:**

<code><pre>
&lt;UserContext.Provider value={{ user, setUser }}&gt;
  &lt;Profile /&gt;
&lt;/UserContext.Provider&gt;
</pre></code>

Ab kisi child component me:

`const { user, setUser } = useContext(UserContext);`

**Aur:**

<code><pre>
    &lt;button onClick={() => setUser("Rahul")}&gt;
    Change User
    &lt;/button&gt;
</pre></code>

- Click karte hi Context ki state update hogi.
- Jahan-jahan user consume ho raha hai, UI update ho sakti hai.

## 11. Practical Project – Theme Context 🌙

- Ab proper real-world example.
- Hume poori application me:

<code><pre>
Light Mode ☀️

        ↕

Dark Mode 🌙
</pre></code>

- control karna hai.

Folder Structure

<code><pre>
src/
│
├── context/
│   └── ThemeContext.jsx
│
├── components/
│   └── Navbar.jsx
│
├── App.jsx
└── main.jsx
</pre></code>

## 12. ThemeContext.jsx

<code><pre>
import { createContext, useState } from "react";

export const ThemeContext = createContext();

function ThemeProvider({ children }) {
  const [theme, setTheme] = useState("light");

  function toggleTheme() {
    setTheme((prev) =>
      prev === "light" ? "dark" : "light"
    );
  }

  return (
    &lt;ThemeContext.Provider
      value={{ theme, toggleTheme }}
    &gt;
      {children}
    &lt;/ThemeContext.Provider&gt;
  );
}

export default ThemeProvider;
</pre></code>

- Yahan ek nayi cheez hai:

`{children}`

**Iska simple meaning:**

- `ThemeProvider` ke andar jo components rakhenge, wo yahan render honge.

## 13. main.jsx
- Ab poori application ko Provider ke andar wrap kar do:

<code><pre>
import React from "react";
import ReactDOM from "react-dom/client";

import App from "./App";
import ThemeProvider from "./context/ThemeContext";

ReactDOM.createRoot(
  document.getElementById("root")
).render(
  &lt;ThemeProvider&gt;
    &lt;App /&gt;
  &lt;/ThemeProvider&gt;
);
</pre></code>

**Ab:**

<code><pre>
ThemeProvider
      ↓
     App
      ↓
Poore App ko Context available
</pre></code>

## 14. App.jsx me Context Use Karo

<code><pre>
import { useContext } from "react";
import { ThemeContext } from "./context/ThemeContext";

function App() {
  const { theme, toggleTheme } =
    useContext(ThemeContext);

  return (
    &lt;div className={theme}>
      &lt;h1&gt;{theme} Mode&lt;/h1&gt;
      &lt;button onClick={toggleTheme}&gt;
        Change Theme
      &lt;/button&gt;
    &lt;/div&gt;
  );
}

export default App;
</pre></code>

**Button click:**

<code><pre>
light
  ↓
dark
  ↓
light
  ↓
dark
</pre></code>

## 15. Context API Kahan Use Hota Hai?
- Real projects me common examples:

| Data            | Context           |
| --------------- | ----------------- |
| Logged-in User  | `AuthContext`     |
| Dark/Light Mode | `ThemeContext`    |
| Language        | `LanguageContext` |
| Cart            | `CartContext`     |
| App Settings    | `SettingsContext` |

**Example:**

<code><pre>
AuthContext
    ↓
user
isLoggedIn
login()
logout()
</pre></code>

## 16. Props vs Context

| Props               | Context                 |
| ------------------- | ----------------------- |
| Parent → Child      | Many components         |
| Simple data passing | Shared/global-like data |
| Small hierarchy     | Deep component tree     |
| Explicit            | Centralized sharing     |

**Important:**
- Context API ka matlab ye nahi ki Props ki zarurat khatam ho gayi.
- Normal parent-child data ke liye props abhi bhi best hain.

## 17. Context API vs Redux

- Abhi Redux ki tension mat lo.
**Simple difference:**

<code><pre>
Context API
    ↓
Small/Medium shared state
    ↓
Built into React
</pre></code>

**Redux Toolkit:**

<code><pre>
Complex Global State
    ↓
Large Applications
    ↓
External Library
</pre></code>

- Har project ko Redux ki zarurat nahi hoti.

## Interview Questions

**Q1. Context API kya hai?**

- Components ke beech shared data pass karne ka React ka built-in mechanism hai, bina har intermediate level par props pass kiye.

**Q2. Prop Drilling kya hai?**
- Data ko unnecessary intermediate components ke through props me pass karna.

**Q3. Context create kaise karte hain?**
- `const MyContext = createContext();`

**Q4. Context consume kaise karte hain?**
- `const value = useContext(MyContext);`

**Q5. Provider kya karta hai?**
- Context value ko uske descendant components ke liye available karta hai.

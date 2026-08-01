# Chapter 8 - State (useState Hook) ⭐⭐⭐⭐⭐

## State Kya Hai?
- State ek special variable hai.
- Ye value store bhi karta hai...
- Aur React ko batata bhi hai ki
- UI dobara update karo

## useState Hook

**Syntax**

``const [count, setCount] = useState(0);``

**Breakdown**

<code><pre>
count

↓

Current Value

setCount

↓

Value Change Karne Wala Function

0

↓

Initial Value
</pre></code>

## Step 1

**Import**

``import { useState } from "react";``

## Step 2

``const [count, setCount] = useState(0);``

## Step 3

**Button**

``setCount(count + 1);``

## Complete Example

<code><pre>
import { useState } from "react";

function App() {

  const [count, setCount] = useState(0);

  function increase() {
    setCount(count + 1);
  }

  return (
    &lt;&gt;
      &lt;h1&gt;Count : {count}&lt;/h1&gt;
      &lt;button onClick={increase}>
        Increase
      &lt;/button&gt;
    &lt;/&gt;
  );

}

export default App;
</pre></code>

## Interview Questions

**Q1. State kya hai?**
- Special variable jo UI update karta hai.

**Q2. useState() kya return karta hai?**

**Do cheeze:**

- Current Value
- Setter Function

**Q3. State update kaise karte hain?**
- ``setState()``

**Example**

``setCount(10)``;

**Q4. Variable aur State me difference?**

| Variable                  | State                     |
| ------------------------- | ------------------------- |
| UI update nahi hoti       | UI update hoti            |
| React ko pata nahi chalta | React re-render karta hai |

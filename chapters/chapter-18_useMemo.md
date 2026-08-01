# Chapter 18 – useMemo() ⭐
- **useMemo expensive calculations ko cache karta hai.**

## 1. Problem

**Suppose**
`const total = bigCalculation();`

**Har render par**

<code><pre>
Render
↓
bigCalculation()
↓
Slow App
</pre></code>

**Solution**

`useMemo()`

## 2. Syntax

<code><pre>
const value = useMemo(() => {

   return calculation();

}, []);
</pre></code>

**Example**

<code><pre>
import { useMemo, useState } from "react";

function App() {

  const [count, setCount] = useState(0);

  const square = useMemo(() => {

    console.log("Calculating...");

    return count * count;

  }, [count]);

  return (
    &lt;&gt;
      &lt;h1&gt;{count}&lt;/h1&gt;
      &lt;h2&gt;{square}&lt;h2&gt;
      &lt;button
        onClick={() => setCount(count + 1)}
      &gt;
        +
      &lt;/button&gt;
    &lt;/&gt;
  );
}
</pre></code>

**Output**

<code><pre>
Count
↓
Square Calculate
↓
Cache
</pre></code>

**Without useMemo**

<code><pre>
Every Render
↓
Calculation
</pre></code>

**With useMemo**

<code><pre>
Dependency Change
↓
Calculation

Else
↓
Cached Value
</pre></code>

**Common Use Cases**

- Sorting
- Filtering
- Large Arrays
- Expensive Math
- Search Results

## Interview Questions

**useMemo kya return karta hai?**
- Calculated value.

**Kab use karna chahiye?**
- Expensive calculations.

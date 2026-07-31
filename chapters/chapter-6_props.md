# 1. Props Kya Hai?
- Parent Component se Child Component ko data bhejne ka tarika.

## Parent → Child
<code><pre>
App.jsx

↓

Header.jsx
</pre></code>

- App Parent hai.
- Header Child hai.

## Props Example
## Step 1 ``Header.jsx``
<code><pre>
function Header(props) {
  return &lt;h1&gt; Welcome {props.name} &lt;/h1&gt;;
}

export default Header;
</pre></code>

## Step 2 ``App.jsx``
<code><pre>
import Header from "./components/Header";

function App() {
  return (
    &lt;&gt;
      &lt;Header name="Jyoti" /&gt;
    &lt;/&gt;
  );
}

export default App;
</pre></code>

**Output**

Welcome Jyoti

## Data Flow

<code><pre>
App.jsx

↓

name="Jyoti"

↓

Header.jsx

↓

props.name

↓

Browser
</pre></code>

## String vs Number

**Rule**

| Type     | Syntax |
| -------- | ------ |
| String   | `" "`  |
| Number   | `{}`   |
| Boolean  | `{}`   |
| Variable | `{}`   |


## Variable as Props

<code><pre>
function App() {

  const name = "Jyoti";
  const city = "Lucknow";

  return (
    &lt;Header
      name={name}
      city={city}
    /&gt;
  );

}
</pre></code>

**Output**
Name : Jyoti

City : Lucknow


## Props ko Change Kar Sakte Hain?

- ❌ Nahi. Props Read Only hote hain.

## Destructuring (Professional Style)

**Instead of:**

<code><pre>
function Header(props) {

  return (
    &lt;h1&gt;{props.name}&lt;/h1&gt;
  );

}
</pre></code>

**Professional way:**

<code><pre>
function Header({ name }) {
  return &lt;h1&gt;{name}&lt;/h1&gt;
}
</pre></code>

**Multiple Props**

<code><pre>
function Header({ name, city, age }) {
  return (
    &lt;&gt;
      &lt;h1&gt; {name} &lt;/h1&gt;
      &lt;p&gt;{city}&lt;/p&gt;
      &lt;p&gt;{age}&lt;/p&gt;
    &lt;/&gt;
  );
}
</pre></code>
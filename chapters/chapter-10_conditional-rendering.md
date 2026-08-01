# Chapter 10 - Conditional Rendering ⭐⭐⭐⭐⭐

## 1. Conditional Rendering Kya Hai?

- Condition ke hisaab se alag UI dikhana.

**Simple words me:**

<code><pre>
Agar Condition True

↓

Ye UI dikhao

Else

↓

Dusra UI dikhao
</pre></code>

## React Solution Ternary Operator

`condition ? true : false`

**Example**

<code><pre>
function App() {

  const isLogin = true;

  return (
    <>
      {
        isLogin
          ? &lt;h1&gt;Welcome Back&lt;/h1&gt;
          : &lt;h1&gt;Please Login&lt;/h1&gt;
      }
    </>
  );

}

export default App;
</pre></code>

**Output**

``Welcome Back``

## Login Button Example

<code><pre>
function App() {

  const isLogin = false;

  return (
    <>
      {
        isLogin
          ? &lt;button&gt;Logout&lt;/button&gt;
          : &lt;button&gt;Login&lt;/button&gt;
      }
    </>
  );

}

</pre></code>

**Output**

`Login`

## Empty List Example

<code><pre>
function App() {

  const products = [];

  return (
    &lt;&gt;
      {
        products.length > 0
          ? &lt;h2&gt;Products Available&lt;/h2&gt;
          : &lt;h2&gt;No Products Found&lt;/h2&gt;
      }
    &lt;/&gt;
  );

}
</pre></code>

**Output**

`No Products Found`

## Interview Questions

**Q1. React me if directly JSX ke andar use kar sakte hain?**
- ❌ Nahi.

**Q2. Conditional Rendering ke liye sabse common operator?**
- ? :
- (Ternary Operator)

**Q3. Sirf True par UI dikhani ho?**
- &&

<code><pre>
function App() {
  const isLoggedIn = true;

  return (
    &lt;div&gt;
      &lt;h1&gt;My App&lt;h1&gt;
      {isLoggedIn && &lt;h2&gt;Welcome User!&lt;h2&gt;}
    &lt;/div&gt;
  );
}

export default App;
</pre></code>

**Q4. Login/Logout kis concept ka example hai?**
- Conditional Rendering.

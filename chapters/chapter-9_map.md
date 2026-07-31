# Chapter 8 - Rendering Lists (map())

## React me map()

<code><pre>
function App() {

  const students = [
    "Rahul",
    "Amit",
    "Jyoti"
  ];

  return (
    <>
      {students.map((student) => (
        <h2>{student}</h2>
      ))}
    </>
  );

}

export default App;
</pre></code>

## map() Ka Syntax

<code><pre>
array.map((item) => {
    return (...)
})
</pre></code>

## Number List Example

<code><pre>
function App() {

  const numbers = [10,20,30,40];

  return (
    <>
      {
        numbers.map((num) => (
          &lt;h2&gt;{num}&lt;/h2&gt;
        ))
      }
    </>
  );

}
</pre></code>

**Output**

10

20

30

40

## Objects ke saath map()

<code><pre>
function App() {

  const users = [
    { id:1, name:"Rahul", city:"Delhi" },
    { id:2, name:"Jyoti", city:"Lucknow" }
  ];

  return (
    &lt;&gt;
      {
        users.map((user) => (
          &lt;div&gt;
            &lt;h2&gt;{user.name}&lt;/h2&gt;
            &lt;p&gt;{user.city}&lt;/p&gt;
            &lt;hr/&gt;
          &lt;/div&gt;
        ))
      }
    &lt;/&gt;
  );

}

export default App;
</pre></code>

## Interview Questions

**Q1. React me list render karne ke liye kya use hota hai?**
- map()

**Q2. key prop kyu use hoti hai?**
- Har list item ko unique identify karne ke liye.

**Q3. Best key kya hai?**
- Database ki unique id.

**Q4. index ko key banana chahiye?**
- Sirf simple static list me chal sakta hai.
- Dynamic list me avoid karo.
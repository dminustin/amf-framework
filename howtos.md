<h1>Rendering</h1>
**Render the template page**
<pre>
&lt;?php
app()-&gt;render-&gt;render('view_name', $some_vars_hash_array)
</pre>

*Example:*

To render the appplication/views/mainpage/some_view.php
<pre>
&lt;?php
app()-&gt;render-&gt;render('mainpage/some_view', $some_vars_hash_array)
</pre>


**Include other templates**

Place into template
<pre>
&lt;?php
app()-&gt;render-&gt;render('template_which_you_want_to_include', $some_vars_hash_array)
</pre>


**Change the page title from views template**

<pre>
&lt;?php
app()-&gt;render-&gt;title="Your title";
</pre>


<?php

/* /Applications/MAMP/htdocs/octCMSPortfolio/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_61b3089066e9520c3342df772d330a3ddcbbafd23808b663c2e72dfb1b2e0fd8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_381c44dcf1c40c4509124afd9dc532ce28aa46e270d40cdb2e6b5c5170974308' => [$this, 'block___internal_381c44dcf1c40c4509124afd9dc532ce28aa46e270d40cdb2e6b5c5170974308'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_381c44dcf1c40c4509124afd9dc532ce28aa46e270d40cdb2e6b5c5170974308", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_381c44dcf1c40c4509124afd9dc532ce28aa46e270d40cdb2e6b5c5170974308($context, array $blocks = [])
    {
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/octCMSPortfolio/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  49 => 7,  43 => 16,  34 => 9,  32 => 7,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
{% filter escape %}
{{ \"{% component 'demoTodo' %}\" }}
{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"{{ 'ajax'|page }}\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>", "/Applications/MAMP/htdocs/octCMSPortfolio/themes/demo/partials/explain/plugins.htm", "");
    }
}

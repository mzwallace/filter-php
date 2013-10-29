<?php

/* layout/frame.twig */
class __TwigTemplate_c7e8af1bb5586f8d855167400108c7d006dfcc9b693e9668f2b81f6a9300ec85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout/base.twig");

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'frame_src' => array($this, 'block_frame_src'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_html($context, array $blocks = array())
    {
        // line 4
        echo "    <frameset cols=\"20%,80%\" frameborder=\"1\" border=\"1\" bordercolor=\"#bbb\" framespacing=\"1\">
        <frame src=\"";
        // line 5
        $this->displayBlock('frame_src', $context, $blocks);
        echo "\" name=\"index\">
        <frame src=\"";
        // line 6
        echo (((isset($context["has_namespaces"]) ? $context["has_namespaces"] : $this->getContext($context, "has_namespaces"))) ? ("namespaces") : ("classes"));
        echo ".html\" name=\"main\">
        <noframes>
            <body>
                Your browser does not support frames. Go to the <a href=\"namespaces.html\">non-frame version</a>.
            </body>
        </noframes>
    </frameset>
";
    }

    // line 5
    public function block_frame_src($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  28 => 3,);
    }
}

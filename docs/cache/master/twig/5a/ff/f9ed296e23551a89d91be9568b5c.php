<?php

/* pages/namespace.twig */
class __TwigTemplate_5afff9ed296e23551a89d91be9568b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["page_layout"]) ? $context["page_layout"] : $this->getContext($context, "page_layout")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_465cc5ffcbfa7e653557e37d5e7df0e7929109a7"] = $this->env->loadTemplate("macros.twig");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_body_class($context, array $blocks = array())
    {
        echo "overview";
    }

    // line 9
    public function block_content_header($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"type\">Namespace</div>
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo "</h1>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))) {
            // line 16
            echo "        <table>
            ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 18
                echo "                <tr>
                    <td>";
                // line 19
                echo $context["__internal_465cc5ffcbfa7e653557e37d5e7df0e7929109a7"]->getclass_link((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</td>
                    <td class=\"last\">";
                // line 20
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc"), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </table>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((isset($context["interfaces"]) ? $context["interfaces"] : $this->getContext($context, "interfaces"))) {
            // line 27
            echo "        <h2>Interfaces</h2>
        <table>
            ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["interfaces"]) ? $context["interfaces"] : $this->getContext($context, "interfaces")));
            foreach ($context['_seq'] as $context["_key"] => $context["interface"]) {
                // line 30
                echo "                <tr>
                    <td>";
                // line 31
                echo $context["__internal_465cc5ffcbfa7e653557e37d5e7df0e7929109a7"]->getclass_link((isset($context["interface"]) ? $context["interface"] : $this->getContext($context, "interface")));
                echo "</td>
                    <td class=\"last\">";
                // line 32
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["interface"]) ? $context["interface"] : $this->getContext($context, "interface")), "shortdesc"), (isset($context["interface"]) ? $context["interface"] : $this->getContext($context, "interface")));
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interface'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </table>
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((isset($context["exceptions"]) ? $context["exceptions"] : $this->getContext($context, "exceptions"))) {
            // line 39
            echo "        <h2>Exceptions</h2>
        <table>
            ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exceptions"]) ? $context["exceptions"] : $this->getContext($context, "exceptions")));
            foreach ($context['_seq'] as $context["_key"] => $context["exception"]) {
                // line 42
                echo "                <tr>
                    <td>";
                // line 43
                echo $context["__internal_465cc5ffcbfa7e653557e37d5e7df0e7929109a7"]->getclass_link((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")));
                echo "</td>
                    <td class=\"last\">";
                // line 44
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "shortdesc"), (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")));
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exception'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "pages/namespace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  143 => 44,  139 => 43,  136 => 42,  132 => 41,  126 => 38,  123 => 37,  119 => 35,  110 => 32,  106 => 31,  103 => 30,  99 => 29,  95 => 27,  93 => 26,  90 => 25,  86 => 23,  77 => 20,  73 => 19,  70 => 18,  66 => 17,  60 => 15,  57 => 14,  51 => 11,  48 => 10,  45 => 9,  39 => 7,  31 => 5,  26 => 3,  150 => 46,  141 => 44,  137 => 43,  133 => 41,  131 => 40,  128 => 39,  124 => 37,  115 => 35,  111 => 34,  107 => 32,  105 => 31,  102 => 30,  98 => 28,  89 => 26,  85 => 25,  82 => 24,  80 => 23,  74 => 21,  71 => 20,  63 => 16,  59 => 14,  53 => 11,  50 => 10,  47 => 9,  41 => 7,  33 => 5,  28 => 3,);
    }
}

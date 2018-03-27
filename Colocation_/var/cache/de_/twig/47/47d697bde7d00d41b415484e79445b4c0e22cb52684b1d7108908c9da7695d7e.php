<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c43115d6780c0a0a796437fc162314ec94ef387d0f2b16bd014fa6fe3502b100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6f46aad404b51475c001c2f728bd22cd13e4b26c2376ac23f9970d785c5bd64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f46aad404b51475c001c2f728bd22cd13e4b26c2376ac23f9970d785c5bd64->enter($__internal_b6f46aad404b51475c001c2f728bd22cd13e4b26c2376ac23f9970d785c5bd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8bb80c446d18ecba2cca344f18039ff6eb48f9899581eef2c94ecad12d5e21bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb80c446d18ecba2cca344f18039ff6eb48f9899581eef2c94ecad12d5e21bb->enter($__internal_8bb80c446d18ecba2cca344f18039ff6eb48f9899581eef2c94ecad12d5e21bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b6f46aad404b51475c001c2f728bd22cd13e4b26c2376ac23f9970d785c5bd64->leave($__internal_b6f46aad404b51475c001c2f728bd22cd13e4b26c2376ac23f9970d785c5bd64_prof);

        
        $__internal_8bb80c446d18ecba2cca344f18039ff6eb48f9899581eef2c94ecad12d5e21bb->leave($__internal_8bb80c446d18ecba2cca344f18039ff6eb48f9899581eef2c94ecad12d5e21bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

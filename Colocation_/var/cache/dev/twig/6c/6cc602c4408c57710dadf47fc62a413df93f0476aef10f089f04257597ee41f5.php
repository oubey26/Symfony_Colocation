<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_86b4e876cc66fa3dbdc83c08f44c09365ba619f2ece2d205c9a6d1fece255346 extends Twig_Template
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
        $__internal_eef3c8de97b903db29e5a57f3b3fde8a66bae07af3e1b153ee959c78d76c05f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef3c8de97b903db29e5a57f3b3fde8a66bae07af3e1b153ee959c78d76c05f7->enter($__internal_eef3c8de97b903db29e5a57f3b3fde8a66bae07af3e1b153ee959c78d76c05f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_88996b602053458e24e11c0294e3cb8e5bf524d4ac32ff565f1781ff7ecf1281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88996b602053458e24e11c0294e3cb8e5bf524d4ac32ff565f1781ff7ecf1281->enter($__internal_88996b602053458e24e11c0294e3cb8e5bf524d4ac32ff565f1781ff7ecf1281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_eef3c8de97b903db29e5a57f3b3fde8a66bae07af3e1b153ee959c78d76c05f7->leave($__internal_eef3c8de97b903db29e5a57f3b3fde8a66bae07af3e1b153ee959c78d76c05f7_prof);

        
        $__internal_88996b602053458e24e11c0294e3cb8e5bf524d4ac32ff565f1781ff7ecf1281->leave($__internal_88996b602053458e24e11c0294e3cb8e5bf524d4ac32ff565f1781ff7ecf1281_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}

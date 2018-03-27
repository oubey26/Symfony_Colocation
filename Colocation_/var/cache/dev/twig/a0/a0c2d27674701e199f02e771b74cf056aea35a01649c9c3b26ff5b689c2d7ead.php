<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d9e398760866dfc112743b10d54fa9f7c719429dec88105cb8c3735aa938f39b extends Twig_Template
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
        $__internal_0dac938fc7270f28f7c6c520f2e2b8ef34ba5fbb94d9c1bd02f9e63b965db4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dac938fc7270f28f7c6c520f2e2b8ef34ba5fbb94d9c1bd02f9e63b965db4c9->enter($__internal_0dac938fc7270f28f7c6c520f2e2b8ef34ba5fbb94d9c1bd02f9e63b965db4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d116e88c9c4158303b1310d203c65a757c2c976c03a36e4e7e0a9737d9ff781b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d116e88c9c4158303b1310d203c65a757c2c976c03a36e4e7e0a9737d9ff781b->enter($__internal_d116e88c9c4158303b1310d203c65a757c2c976c03a36e4e7e0a9737d9ff781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_0dac938fc7270f28f7c6c520f2e2b8ef34ba5fbb94d9c1bd02f9e63b965db4c9->leave($__internal_0dac938fc7270f28f7c6c520f2e2b8ef34ba5fbb94d9c1bd02f9e63b965db4c9_prof);

        
        $__internal_d116e88c9c4158303b1310d203c65a757c2c976c03a36e4e7e0a9737d9ff781b->leave($__internal_d116e88c9c4158303b1310d203c65a757c2c976c03a36e4e7e0a9737d9ff781b_prof);

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

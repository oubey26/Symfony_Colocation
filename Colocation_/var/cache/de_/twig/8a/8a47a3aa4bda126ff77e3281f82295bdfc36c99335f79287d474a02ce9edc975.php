<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d6fb483c41f71a808ef5ef7ad173453be0114057eb04d1351894e1216e94cbdb extends Twig_Template
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
        $__internal_9bc220b834b6a3177ca1d890c34e02ff38895daef470b5aeb3a596ed5003ad2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc220b834b6a3177ca1d890c34e02ff38895daef470b5aeb3a596ed5003ad2d->enter($__internal_9bc220b834b6a3177ca1d890c34e02ff38895daef470b5aeb3a596ed5003ad2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_5c9ba8f9e7aead69d8a64c8d5a28d29f1933ae7407becaa1d917bd4895714d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9ba8f9e7aead69d8a64c8d5a28d29f1933ae7407becaa1d917bd4895714d36->enter($__internal_5c9ba8f9e7aead69d8a64c8d5a28d29f1933ae7407becaa1d917bd4895714d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_9bc220b834b6a3177ca1d890c34e02ff38895daef470b5aeb3a596ed5003ad2d->leave($__internal_9bc220b834b6a3177ca1d890c34e02ff38895daef470b5aeb3a596ed5003ad2d_prof);

        
        $__internal_5c9ba8f9e7aead69d8a64c8d5a28d29f1933ae7407becaa1d917bd4895714d36->leave($__internal_5c9ba8f9e7aead69d8a64c8d5a28d29f1933ae7407becaa1d917bd4895714d36_prof);

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

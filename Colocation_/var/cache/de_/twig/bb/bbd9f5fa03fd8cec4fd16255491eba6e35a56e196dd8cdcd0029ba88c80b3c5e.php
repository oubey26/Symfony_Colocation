<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_077ba7d66ba2999a1b4bb9413f8fc996a5a1fc0b69fd5f7a84184c6935320071 extends Twig_Template
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
        $__internal_f4b514dbc21e7924eddb2077c86baf9d1a58cce3f91bbdc27ccacabe4aaea707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b514dbc21e7924eddb2077c86baf9d1a58cce3f91bbdc27ccacabe4aaea707->enter($__internal_f4b514dbc21e7924eddb2077c86baf9d1a58cce3f91bbdc27ccacabe4aaea707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ad0ad5652b64867a9fe507571966851da877bdfc61395e977149da5da91b2899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0ad5652b64867a9fe507571966851da877bdfc61395e977149da5da91b2899->enter($__internal_ad0ad5652b64867a9fe507571966851da877bdfc61395e977149da5da91b2899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f4b514dbc21e7924eddb2077c86baf9d1a58cce3f91bbdc27ccacabe4aaea707->leave($__internal_f4b514dbc21e7924eddb2077c86baf9d1a58cce3f91bbdc27ccacabe4aaea707_prof);

        
        $__internal_ad0ad5652b64867a9fe507571966851da877bdfc61395e977149da5da91b2899->leave($__internal_ad0ad5652b64867a9fe507571966851da877bdfc61395e977149da5da91b2899_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

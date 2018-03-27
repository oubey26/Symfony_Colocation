<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6ada2efded8ea832b2fa7b949c5a223b25adf3b1cb0b009d539bf3a6b74ff1e4 extends Twig_Template
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
        $__internal_6a90151aefb79deff978dad212984470c971508145991a19e99c359e4f116611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a90151aefb79deff978dad212984470c971508145991a19e99c359e4f116611->enter($__internal_6a90151aefb79deff978dad212984470c971508145991a19e99c359e4f116611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b8e1ce489e9852c6faef697e471aee4872528ae6c25c0c1234ff168ff573f1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e1ce489e9852c6faef697e471aee4872528ae6c25c0c1234ff168ff573f1b2->enter($__internal_b8e1ce489e9852c6faef697e471aee4872528ae6c25c0c1234ff168ff573f1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6a90151aefb79deff978dad212984470c971508145991a19e99c359e4f116611->leave($__internal_6a90151aefb79deff978dad212984470c971508145991a19e99c359e4f116611_prof);

        
        $__internal_b8e1ce489e9852c6faef697e471aee4872528ae6c25c0c1234ff168ff573f1b2->leave($__internal_b8e1ce489e9852c6faef697e471aee4872528ae6c25c0c1234ff168ff573f1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

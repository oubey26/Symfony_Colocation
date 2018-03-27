<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f55fb00593f239d18e5242238e03625044166ee3d81eeb582e628c965b16dd76 extends Twig_Template
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
        $__internal_acc07a3347b3692a89a9d319707199651637e5b021e3162390841d289ed1b52e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc07a3347b3692a89a9d319707199651637e5b021e3162390841d289ed1b52e->enter($__internal_acc07a3347b3692a89a9d319707199651637e5b021e3162390841d289ed1b52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f0bea32f0ad3a9188303a2809b0f814dfcfc6d4fbe3746c6e458664d7580c3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bea32f0ad3a9188303a2809b0f814dfcfc6d4fbe3746c6e458664d7580c3b2->enter($__internal_f0bea32f0ad3a9188303a2809b0f814dfcfc6d4fbe3746c6e458664d7580c3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_acc07a3347b3692a89a9d319707199651637e5b021e3162390841d289ed1b52e->leave($__internal_acc07a3347b3692a89a9d319707199651637e5b021e3162390841d289ed1b52e_prof);

        
        $__internal_f0bea32f0ad3a9188303a2809b0f814dfcfc6d4fbe3746c6e458664d7580c3b2->leave($__internal_f0bea32f0ad3a9188303a2809b0f814dfcfc6d4fbe3746c6e458664d7580c3b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

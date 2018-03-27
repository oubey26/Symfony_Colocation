<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f2e4bd956abe85827b54704dbce9816249834a9fe00fbf9206b5e48f60c775f1 extends Twig_Template
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
        $__internal_e85183a7f86566f58662b84377c2d8e3ef822256c052bac85273c29682ce4309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85183a7f86566f58662b84377c2d8e3ef822256c052bac85273c29682ce4309->enter($__internal_e85183a7f86566f58662b84377c2d8e3ef822256c052bac85273c29682ce4309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a36d8a70645d4f982103cb732ac925315933bd24433b3179a4b6cb8d895d7f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36d8a70645d4f982103cb732ac925315933bd24433b3179a4b6cb8d895d7f5a->enter($__internal_a36d8a70645d4f982103cb732ac925315933bd24433b3179a4b6cb8d895d7f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_e85183a7f86566f58662b84377c2d8e3ef822256c052bac85273c29682ce4309->leave($__internal_e85183a7f86566f58662b84377c2d8e3ef822256c052bac85273c29682ce4309_prof);

        
        $__internal_a36d8a70645d4f982103cb732ac925315933bd24433b3179a4b6cb8d895d7f5a->leave($__internal_a36d8a70645d4f982103cb732ac925315933bd24433b3179a4b6cb8d895d7f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9a4c7d547e864ccaeb7f86b6782bf06c1486fefc9f3cfa5b342f1a7422c15508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67a9f9543e6d6b59fa9428cbdd73132ebf0facd2009b6b4b861fb967beae8f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a9f9543e6d6b59fa9428cbdd73132ebf0facd2009b6b4b861fb967beae8f3d->enter($__internal_67a9f9543e6d6b59fa9428cbdd73132ebf0facd2009b6b4b861fb967beae8f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_3e714ce1fc5e91b52fca5d517b0e11846ed7be333bb17855a061a93c66eaec8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e714ce1fc5e91b52fca5d517b0e11846ed7be333bb17855a061a93c66eaec8a->enter($__internal_3e714ce1fc5e91b52fca5d517b0e11846ed7be333bb17855a061a93c66eaec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67a9f9543e6d6b59fa9428cbdd73132ebf0facd2009b6b4b861fb967beae8f3d->leave($__internal_67a9f9543e6d6b59fa9428cbdd73132ebf0facd2009b6b4b861fb967beae8f3d_prof);

        
        $__internal_3e714ce1fc5e91b52fca5d517b0e11846ed7be333bb17855a061a93c66eaec8a->leave($__internal_3e714ce1fc5e91b52fca5d517b0e11846ed7be333bb17855a061a93c66eaec8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_905b32f80b1e712991686c5a40f52850ebfe000c7d0013c719cbfa795386a598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905b32f80b1e712991686c5a40f52850ebfe000c7d0013c719cbfa795386a598->enter($__internal_905b32f80b1e712991686c5a40f52850ebfe000c7d0013c719cbfa795386a598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7a811fe07780d890ff32d97271c71b7e2dad9b63a2b9c9eeab43dde6cae9fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a811fe07780d890ff32d97271c71b7e2dad9b63a2b9c9eeab43dde6cae9fb2->enter($__internal_f7a811fe07780d890ff32d97271c71b7e2dad9b63a2b9c9eeab43dde6cae9fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f7a811fe07780d890ff32d97271c71b7e2dad9b63a2b9c9eeab43dde6cae9fb2->leave($__internal_f7a811fe07780d890ff32d97271c71b7e2dad9b63a2b9c9eeab43dde6cae9fb2_prof);

        
        $__internal_905b32f80b1e712991686c5a40f52850ebfe000c7d0013c719cbfa795386a598->leave($__internal_905b32f80b1e712991686c5a40f52850ebfe000c7d0013c719cbfa795386a598_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}

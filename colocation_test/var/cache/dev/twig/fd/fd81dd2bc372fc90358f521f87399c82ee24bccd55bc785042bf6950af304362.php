<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e2f12d92c86066cb69923a336975d4cab240021a032b829d24cc7ddca8d93019 extends Twig_Template
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
        $__internal_7b951f007ac21a9654db25eac47fceafd3cd554aa6a099cae9a96fe91f87d41c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b951f007ac21a9654db25eac47fceafd3cd554aa6a099cae9a96fe91f87d41c->enter($__internal_7b951f007ac21a9654db25eac47fceafd3cd554aa6a099cae9a96fe91f87d41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d349f105dcd45b48f2dbe29058f53b6b17b432e36ce3f84aa1ff6276150b39e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d349f105dcd45b48f2dbe29058f53b6b17b432e36ce3f84aa1ff6276150b39e6->enter($__internal_d349f105dcd45b48f2dbe29058f53b6b17b432e36ce3f84aa1ff6276150b39e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b951f007ac21a9654db25eac47fceafd3cd554aa6a099cae9a96fe91f87d41c->leave($__internal_7b951f007ac21a9654db25eac47fceafd3cd554aa6a099cae9a96fe91f87d41c_prof);

        
        $__internal_d349f105dcd45b48f2dbe29058f53b6b17b432e36ce3f84aa1ff6276150b39e6->leave($__internal_d349f105dcd45b48f2dbe29058f53b6b17b432e36ce3f84aa1ff6276150b39e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ddeace571f3dc38d7cc1cbd26b8638c8862823011e1c9360d6d95dd9737c7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ddeace571f3dc38d7cc1cbd26b8638c8862823011e1c9360d6d95dd9737c7f0->enter($__internal_9ddeace571f3dc38d7cc1cbd26b8638c8862823011e1c9360d6d95dd9737c7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af9a266af2f3536dd8e4765dbbf30ac999b89a6cc1e241c943b9f080901d0db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9a266af2f3536dd8e4765dbbf30ac999b89a6cc1e241c943b9f080901d0db2->enter($__internal_af9a266af2f3536dd8e4765dbbf30ac999b89a6cc1e241c943b9f080901d0db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_af9a266af2f3536dd8e4765dbbf30ac999b89a6cc1e241c943b9f080901d0db2->leave($__internal_af9a266af2f3536dd8e4765dbbf30ac999b89a6cc1e241c943b9f080901d0db2_prof);

        
        $__internal_9ddeace571f3dc38d7cc1cbd26b8638c8862823011e1c9360d6d95dd9737c7f0->leave($__internal_9ddeace571f3dc38d7cc1cbd26b8638c8862823011e1c9360d6d95dd9737c7f0_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\colocation_test\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
